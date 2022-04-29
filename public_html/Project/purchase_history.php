<?php 
require_once(__DIR__ . "/../../partials/nav.php");

if(!is_logged_in()){
    flash("You must be logged in to view purchase history", "warning");
    die(header("Location: login.php"));
}

$userID = get_user_id();
$db = getDB();
$statement = "";
$isStoreOwner = false;

if(has_role("Admin") || has_role("Store Owner")){
    $statement = $db->prepare("SELECT * FROM Orders");
    $isStoreOwner = true;
}
else{
    $statement = $db->prepare("SELECT id, created, total_price, money_received, payment_method
    FROM Orders
    WHERE user_id = :userID");
}

$orders = [];
try{
    if($isStoreOwner){
        $statement->execute();
    }
    else{
        $statement->execute([":userID" => $userID]);
    }
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $orders = $results;
}
catch(PDOException $e){
    flash("Failure in obtaining purchase history", "warning");
}
?>

<div>
    <h1 style="margin-left:0px; margin-bottom:20px">Purchase History</h1>
    <?php if(count($orders) > 0) : ?>
        <table style="width:98%">
            <tr>
                <td>Order ID (click for more details)</td>
                <td>Date</td>
                <td>Total</td>
                <td>Money Received</td>
                <td>Payment Method</td>
            </tr>
            <?php foreach($orders as $order) : ?>
                <tr>
                    <td>
                        <?php if(has_role("Admin") || has_role("Store Owner")) : ?>
                            <a style="display:inline-block; margin:0px; text-decoration:none; color:white;" href="order_details.php?id=<?php se($order, "id") ?>">
                                <div style="display:inline-block; margin:0px;"><?php se($order, "id") ?> (User ID: <?php se($order, "user_id") ?>)</div>
                            </a>
                        <?php else : ?>
                            <a style="display:inline-block; margin:0px; text-decoration:none; color:white;" href="order_details.php?id=<?php se($order, "id") ?>">
                                <div style="display:inline-block; margin:0px;"><?php se($order, "id") ?></div>
                            </a>
                        <?php endif; ?>
                    </td>
                    <td><?php se($order, "created") ?></td>
                    <td>$<?php se($order, "total_price") ?></td>
                    <td>$<?php se($order, "money_received") ?></td>
                    <td><?php se($order, "payment_method") ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <h3><i>No purchases</i></h3>
    <?php endif; ?>
</div>

