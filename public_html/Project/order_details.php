<?php 
require_once(__DIR__ . "/../../partials/nav.php");

if(!is_logged_in()){
    flash("You must be logged in to view order details", "warning");
    die(header("Location: login.php"));
}

$userID = get_user_id();
$orderID = $_GET["id"];
$db = getDB();

$statement = $db->prepare("SELECT id, total_price, address, payment_method, money_received, customer_name 
FROM Orders
WHERE id = :orderID AND user_id = :userID");//max order id is the user's most recent order

$orderDetails = [];
try{
    $statement->execute([":orderID" => $orderID, ":userID" => $userID]);
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    $orderDetails = $results;
}
catch(PDOException $e){
    flash("Failure in retrieving most recent order $e", "warning");
}

$statement = $db->prepare("SELECT O.order_id, O.product_id, O.quantity, O.unit_price, (O.quantity * O.unit_price) as subtotal, P.id, P.name 
FROM OrderItems O INNER JOIN Products P ON O.product_id = P.id
WHERE O.order_id = :orderID");

$orderItems = [];
try{
    $statement->execute([":orderID" => $orderID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $orderItems = $results;
}
catch(PDOException $e){
    flash("Failure in retrieving items of most recent order", "warning");
}
?>

<div>
    <h1 style="margin-left:0px; margin-bottom:20px">Order ID <?php se($orderID) ?></h1>
    <h2>Details:</h2>

    <table style="margin-left:0px; margin-bottom:20px">
        <tr>
            <td>Item</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
        <?php foreach($orderItems as $item) : ?>
            <tr>
                <td style="width:25%" >
                    <a style="display:inline-block; margin:0px; text-decoration:none; color:white;" href="product_info.php?id=<?php se($item, "product_id") ?>">
                        <div style="display:inline-block; margin:0px;"><?php se($item, "name") ?></div>
                    </a>
                </td>

                <td>
                    <?php se($item, "quantity") ?>
                </td>
                <td>$<?php se($item, "subtotal") ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h4>Total: $<?php se($orderDetails, "total_price") ?></h4>
    <h4>You Spent: $<?php se($orderDetails, "money_received") ?></h4>
    <h4>Payment Method: <?php se($orderDetails, "payment_method") ?></h4>
    <h4>Shipping Address: <?php se($orderDetails, "address") ?></h4>
</div>