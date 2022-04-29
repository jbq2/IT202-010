<?php 
require_once(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to view this page.", "warning");
    die(header("Location: login.php"));
}

$db = getDB();
$userID = get_user_id();
$clear = se($_POST, "clear", "", false);
$removeItem = se($_GET, "remItem", "", false);
$increment = se($_GET, "inc", "", false);
$decrement = se($_GET, "dec", "", false);
$checkout = se($_POST, "checkout", "", false);
if(!empty($clear)){//works
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
if(!empty($removeItem)){//works
    $statement = $db->prepare("DELETE FROM Cart
    WHERE user_id = :userID AND product_id = :itemID");
    try{
        $statement->execute([":userID" => $userID, ":itemID" => $removeItem]);
    }
    catch(PDOException $e){
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
if(!empty($increment)){//works
    $statement = $db->prepare("UPDATE Cart
    SET desired_quantity = desired_quantity + 1
    WHERE user_id = :userID AND product_id = :itemID");
    try{
        $statement->execute([":userID" => $userID, ":itemID" => $increment]);
    }
    catch(PDOException $e){
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
if(!empty($decrement)){//UCID: jbq2; IT202-010
    $statement = $db->prepare("UPDATE Cart
    SET desired_quantity = desired_quantity - 1
    WHERE user_id = :userID AND product_id = :itemID");
    try{
        $statement->execute([":userID" => $userID, ":itemID" => $decrement]);
    }
    catch(PDOException $e){
        if($e->getCode() == "HY000"){
            $statement = $db->prepare("DELETE FROM Cart
            WHERE user_id = :userID AND product_id = :itemID");
            try{
                $statement->execute([":userID" => $userID, ":itemID" => $decrement]);
            }
            catch(PDOException $e){
                flash("<pre>" . var_export($e, true) . "</pre>");
            }
        }
        else{
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}

if(!empty($checkout)){
    die(header("Location: checkout.php"));
}

$statement = $db->prepare("SELECT C.product_id, C.desired_quantity, P.name, (C.desired_quantity*P.unit_price) as subtotal FROM Cart C INNER JOIN Products P
ON C.product_id = P.id
WHERE user_id = :userID");
try{
    $statement->execute([":userID" => $userID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    flash("<pre>" . var_export($e, true) . "</pre>");
}

$total = 0;
foreach($results as $cartItem){
    $total += $cartItem["subtotal"];
}
?>

<h1>Your Cart</h1>
<div class="cartPageDiv">
    <?php if(count($results) > 0) : ?>
        <!-- table of stuff -->
        <table class="cartItems" style="margin:10px; width:95%">
            <tr>
                <td style="width:50%"><b>Item</b></td>
                <td style="width:25%"><b>Quantity</b></td>
                <td style="width:15%"><b>Subtotal</b></td>
            </tr>
            <?php foreach($results as $cartItem) : ?>
                <tr>
                    <td style="width:40%">
                        <form style="display:inline-block;" class="removeItem" method="GET">
                            <button style="display:inline-block; padding-top:0px; padding-bottom:0px; background-color:black" type="submit" value="<?php se($cartItem, "product_id") ?>" name="remItem">
                                X
                            </button>
                        </form>
                        <a style="display:inline-block; margin:0px; text-decoration:none; color:white;" href="product_info.php?id=<?php se($cartItem, "product_id") ?>">
                            <div style="display:inline-block; margin:0px;"><?php se($cartItem, "name") ?></div>
                        </a>
                    </td>
                    <td>
                        <?php se($cartItem, "desired_quantity") ?>
                        <form style="display:inline-block;" class="changeQuantity" method="GET">
                            <button style="display:inline-block; padding-top:0px; padding-bottom:0px; background-color:black" type="submit" value="<?php se($cartItem, "product_id") ?>" name="dec"> 
                                - 
                            </button>
                            <button style="display:inline-block; padding-top:0px; padding-bottom:0px; background-color:black" type="submit" value="<?php se($cartItem, "product_id") ?>" name="inc">
                                +
                            </button>
                        </form>
                    </td>
                    <td>$<?php se($cartItem, "subtotal") ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h4 style="margin-left:40px">Total: $<?php echo($total) ?></h4>
        <form style="margin-top:30px" class="clearCartForm" method="POST">
            <input type="submit" name="clear" value="Clear Cart" />
            <input type="submit" name="checkout" value="Checkout" />
        </form>
    <?php else : ?>
        <h4 style="margin-left:30px; margin-top:20px"><i>There is nothing in your cart</i></h4>
    <?php endif; ?>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>