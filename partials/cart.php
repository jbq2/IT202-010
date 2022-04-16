<?php 
$db = getDB();
$userID = get_user_id();
$statement = $db->prepare("SELECT C.product_id, C.desired_quantity, P.name FROM Cart C INNER JOIN Products P
ON C.product_id = P.id
WHERE user_id = :userID");
try{
    $statement->execute([":userID" => $userID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h2 style="margin-left:40px">Cart</h2>
    <?php if(count($results) > 0) : ?>
        <!-- table of stuff -->
        <table class="cartItems" style="margin:10px">
            <?php foreach($results as $cartItem) : ?>
                <tr>
                    <td style="width:400px">
                        <button onclick="" style="display:inline-block; padding-top:0px; padding-bottom:0px; background-color:black">X</button>
                        <div style="display:inline-block; margin:0px;"><?php se($cartItem, "name") ?></div>
                    </td>
                    <td>
                        <?php se($cartItem, "desired_quantity") ?>
                        <button style="margin-left:20px" class="changeQuantBtn" id="sub" onclick="decQuantity()"> - </button>
                        <button class="changeQuantBtn" id="add" onclick="incQuantity()">+</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h4 style="margin-left:40px">Total:</h4>
        <form style="margin-top:30px" class="clearCartForm" method="POST">
            <input type="submit" name="clear" value="Clear Cart" />
        </form>
    <?php else : ?>
        <h4 style="margin-left:30px; margin-top:20px">There is nothing in your cart</h4>
    <?php endif; ?>
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()">&#9776; Open Cart</button>
</div>

<style>
    .changeQuantBtn{
        margin:5px;
        display:inline-block;
        padding:2px;
        height:30px;
    }
    .openbtn{
        margin:0px;
    }
    .sidebar {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #323439; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
    margin:0
    }

    /* The sidebar links */
    .sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidebar a:hover {
    color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    }

    /* The button used to open the sidebar */
    .openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #323439;
    color: white;
    padding: 10px 15px;
    border: none;
    }

    .openbtn:hover {
    background-color: #444;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
    transition: margin-left .5s; /* If you want a transition effect */
    padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
    }
</style>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "450px";
        document.getElementById("main").style.marginLeft = "450px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "40px";
    }
</script>

<?php 
function addToCart($itemID, $itemPrice){
    $db = getDB();
    $userID = get_user_id();
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

function removeFromCart(){

}

function clearCart(){
    $db = getDB();
    $userID = get_user_id();
    $statement = $db->prepare("DELETE FROM Cart
    WHERE user_id = :userID");
    try{
        $statement->execute([":userID" => $userID]);
        flash("Cart has been cleared", "success");
    }
    catch(PDOException $e){
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}

$clear = se($_POST, "clear", "", false);
if(!empty($clear)){
    clearCart();
}
?>