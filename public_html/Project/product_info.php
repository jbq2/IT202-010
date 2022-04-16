<?php
require_once(__DIR__ . "/../../partials/nav.php");

$itemID = $_GET["id"];
$db = getDB();
$statement = $db->prepare("SELECT id, name, description, category, unit_price, stock FROM Products 
WHERE id = :id");
try{
    $statement->execute(["id" => $itemID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $item = $results[0];
}
catch(PDOException $e){
    flash(var_export($e->errorInfo,true), "danger");
}
?>

<?php if(is_logged_in()) : ?>
    <?php require(__DIR__ . "/../../partials/cart.php") ?>
<?php endif; ?>

<style>
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
<div class="OuterPartitionDiv" id="topHalfDiv">
    <h1 style="margin-top:25px; margin-bottom:35px">Product Details</h1>
    <div class="InnerPartitionDiv" id="prodPic"><img src="https://blog.focusinfotech.com/wp-content/uploads/2017/12/default-placeholder-300x300.png"></div>

    <div class="InnerPartitionDiv" id="prodInfo">
        <!-- product info -->
        <h2 style="margin-bottom:15px">ITEM: <?php se($item, "name")?></h2>
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
        </ul>
    </div>
</div>
<div class="OuterPartitionDiv" id="bottomHalfDiv">
    <form class="ProductInfoOptions" method="POST">
        <input style="display:block; margin:30px" type="submit" name="BuyNow" value="Buy Now">
        <input style="display:block; margin:30px" type="submit" name="AddToCart" value="Add to Cart">
    </form>
</div>

<?php

if(!empty($add)){
    if(!is_logged_in()){
        flash("You must be logged in to view this page.", "warning");
        die(header("Location: login.php"));
    }

    addToCart($itemID, se($item, "unit_price"));
}

//TODO implement buy condition
// if(!empty($buy)){

// }
?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>