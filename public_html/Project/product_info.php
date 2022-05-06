<?php
require_once(__DIR__ . "/../../partials/nav.php");

$itemID = $_GET["id"];
$db = getDB();

if(isset($_POST["score"]) && isset($_POST["comment"])){
    $score = se($_POST, "score", "", false);
    $comment = se($_POST, "comment", "", false);
    $userID = get_user_id();
    
    $statement = $db->prepare("INSERT INTO Ratings (product_id, user_id, rating, comment)
    VALUES (:productID, :userID, :rating, :comment)");
    try{
        $statement->execute([":productID" => $itemID, ":userID" => $userID, ":rating" => $score, ":comment" => $comment]);
        flash("Thank you for reviewing this item!", "success");

        $statement = $db->prepare("SELECT AVG(rating) as avgrating
        FROM Ratings
        WHERE product_id = :productID");
        try{
            $statement->execute([":productID" => $itemID]);
            $avgrating = $statement->fetch(PDO::FETCH_ASSOC);
            
            $statement = $db->prepare("UPDATE Products
            SET avgrating = :avgrating
            WHERE id = :productID");
            try{
                $statement->execute([":avgrating" => $avgrating, ":productID" => $itemID]);//TODO make sure this works
                //TODO might have to do a bind value
            }
            catch(PDOException $e){
                flash("Error updating the product's average rating", "warning");
            }
        }
        catch(PDOException $e){
            flash("Error fetching the average rating of the product", "warning");
        }
    }
    catch(PDOException $e){
        flash("Failure processing your rating", "warning");
    }
}

$statement = $db->prepare("SELECT O.user_id, OI.product_id
FROM Orders O INNER JOIN OrderItems OI ON O.id = OI.order_id
WHERE O.user_id = :userID AND OI.product_id = :prodID");
$purchased = false;
try{
    $userID = get_user_id();
    $statement->execute([":userID" => $userID, ":prodID" => $itemID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($results)){
        $purchased = true;
    }
}   
catch(PDOException $e){
    flash("Failure in determining whether or not this user has purchase this item", "warning");
}

$statement = $db->prepare("SELECT id, name, description, category, unit_price, stock FROM Products 
WHERE id = :id");
try{
    $statement->execute(["id" => $itemID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $item = $results[0];

    $statement = $db->prepare("SELECT R.id, R.product_id, R.user_id, U.username, R.comment, R.rating 
    FROM Ratings R INNER JOIN Users U on R.user_id = U.id  
    WHERE product_id = :id
    GROUP BY id");
    $ratings = [];
    $average = 0.0;
    $count = 0;
    try{
        $statement->execute([":id" => $itemID]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($results)){
            foreach($results as $rating){
                if($count < 10){
                    array_push($ratings, $rating);
                }
                $average += $rating["rating"];
                $count++;
            }
            $average = round($average/$count, 2);
        }
    }
    catch(PDOException $e){
        flash("Failure in fetching ratings for this item $e", "warning");
    }
}
catch(PDOException $e){
    flash(var_export($e->errorInfo,true), "danger");
}

if(isset($_POST["AddToCart"])){
    if(!is_logged_in()){
        flash("You must be logged in to add items to cart", "warning");
        die(header("Location: login.php"));
    }

    $db = getDB();
    $userID = get_user_id();
    $itemPrice = $item["unit_price"];
    $statement = $db->prepare("SELECT * FROM Cart
    WHERE product_id = :itemID AND user_id = :userID");
    try{
        $statement->execute([":itemID" => $itemID, ":userID" => $userID]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($result) == 0){
            $statement = $db->prepare("INSERT INTO Cart (product_id, user_id, desired_quantity, unit_price)
            VALUES (:itemID, :userID, :quant, :price)");
            try{
                $statement->execute([":itemID" => $itemID, ":userID" => $userID, ":quant" => 1, ":price" => $itemPrice]);
                flash("Successfully added item to your cart!", "success");
            }
            catch(PDOException $e){
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
        else{
            flash("This item is already in your cart", "info");
        }
    }
    catch(PDOException $e){
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
?>

<h1 style="margin-top:25px; margin-bottom:35px">Product Details</h1>
<div class="flex-container" id="topHalfDiv">
    <div class="InnerPartitionDiv" id="prodPic"><img src="https://blog.focusinfotech.com/wp-content/uploads/2017/12/default-placeholder-300x300.png"></div>

    <div class="InnerPartitionDiv" id="prodInfo">
        <!-- product info -->
        <h2 style="margin-bottom:15px; margin-left:30px">Item: <?php se($item, "name")?></h2>
        <ul style="list-style-type:none">
            <li>
                <p style="display:inline-block; font-size:20px">Category:</p>
                <p style="display:inline-block"><?php se($item, "category")?></p>
            </li>
            <li>
                <p style="font-size:20px">About This Product:</p>
                <p style="width: 400px; margin-left:30px"><?php se($item, "description")?></p>
            </li>
            <li>
                <p style="display:inline-block; font-size:20px">Stock:</p>
                <p style="display:inline-block"><?php se($item, "stock")?></p>
            </li>
            <li>
                <p style="display:inline-block; font-size:20px">Price:</p>
                <p style="display:inline-block">$<?php se($item, "unit_price")?></p>
            </li>
            <li>
                <p style="display:inline-block; font-size:20px">Average Rating:</p>
                <?php if(!empty($ratings)) : ?>
                    <p style="display:inline-block"><?php se($average)?></p>
                <?php else : ?>
                    <p style="display:inline-block"><i>No ratings</i></p>
                <?php endif; ?>
            </li>
        </ul>

        <?php if(is_logged_in() && (has_role("Admin") || has_role("Shop Owner"))) : ?>
            <button class="ProductInfoOptions" type="submit" name="Edit" onclick="location.href='admin/admin_edit_product.php?id=<?php se($item, 'id') ?>'">Edit</button>
        <?php endif; ?>
        <form class="ProductInfoOptions" method="POST">
            <input style="display:block; margin:30px" type="submit" name="AddToCart" value="Add to Cart">
        </form>
    </div>

    <div>
        <h3>Ratings</h3>
        <table>
            <?php if(!empty($ratings)) : ?>
                <table style="width:95%">
                    <tr>
                        <td style="width:15%">Rating</td>
                        <td style="width:25%">User</td>
                        <td style="width:60%">Comment</td>
                    </tr>
                    <?php foreach($ratings as $rating) : ?>
                        <tr>
                            <td><?php se($rating, "rating") ?></td>
                            <td><?php se($rating, "username") ?></td>
                            <td><?php se($rating, "comment") ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <h5><i>There are no reviews for this item</i></h5>
            <?php endif; ?>
        </table>
    </div>
</div>

<?php if($purchased) : ?>
<div style="margin-left:50px; margin-top:50px">
    <h3>Rate this item!</h3>
    <form method="POST" onsubmit="return validate(this)">
        <label for="score">Score</label>
        <select name="score">
            <option value=""></option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            <option value="0">0</option>
        </select>
        <br><br>
        <label for="comment">Comment</label>
        <textarea name="comment"></textarea>
        <br><br>
        <input type="submit" style="margin-left:0px"/>
    </form>
</div>
<?php endif; ?>

<script>
    function validate(form){
        let score = form.score.value;
        let comment = form.comment.value;
        let isValid = true;

        if(score == ""){
            isValid = false;
        }
        if(comment == ""){
            isValid = false;
        }

        return isValid;
    }
</script>

<style>
        .flex-container {
        margin:auto;
        display: flex;
    }

    .flex-child {
        flex: 1;
    }  
    .InnerPartitionDiv{
        display:inline-block;
    }
    .OuterPartitionDiv{
        display:inline-block;
        margin:25px;
        margin-top:0px;
    }
    img{
        margin-left:20px; 
        vertical-align:bottom;
        border-radius: 5px;
    }
</style>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>