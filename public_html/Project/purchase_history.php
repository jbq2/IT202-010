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

$filterParams = [];

if(isset($_GET["startdate"]) && isset($_GET["enddate"]) && !empty($_GET["startdate"]) && !empty($_GET["enddate"])){
    $filterParams["startdate"] = $_GET["startdate"];
    $filterParams["enddate"] = $_GET["enddate"];
}

if(isset($_GET["total"])){
    $filterParams["total"] = $_GET["total"];
}

if(isset($_GET["datepurchased"])){
    $filterParams["datepurchased"] = $_GET["datepurchased"];
}

$statement = "";
$baseQuery = "";
$startdate = "";
$enddate = "";
if(has_role("Admin") || has_role("Store Owner")){
    $baseQuery = "SELECT * FROM Orders WHERE 1=1";
    if(array_key_exists("startdate", $filterParams)){
        $startdate = $filterParams["startdate"];
        $enddate = $filterParams["enddate"];
        $baseQuery = $baseQuery . " AND (created >= :startdate AND created <= :enddate)";
    }
    if(array_key_exists("total", $filterParams) && array_key_exists("datepurchased", $filterParams)){
        $totalFilter = $filterParams["total"];
        $datePurchased = $filterParams["datepurchased"];
        $baseQuery = $baseQuery . " ORDER BY created $datePurchased, total_price $totalFilter";
    }
    else if(array_key_exists("total", $filterParams)){
        $totalFilter = $filterParams["total"];
        $baseQuery = $baseQuery . " ORDER BY total_price $totalFilter";
    }
    else if(array_key_exists("datepurchased", $filterParams)){
        $datePurchased = $filterParams["datepurchased"];
        $baseQuery = $baseQuery . " ORDER BY created $datePurchased";
    }

    $statement = $db->prepare($baseQuery);
    $isStoreOwner = true;
}
else{
    $baseQuery = "SELECT id, created, total_price, money_received, payment_method
    FROM Orders
    WHERE user_id = :userID";
    if(array_key_exists("startdate", $filterParams)){
        $startdate = $filterParams["startdate"];
        $enddate = $filterParams["enddate"];
        $baseQuery = $baseQuery . " AND (created >= :startdate AND created <= :enddate)";
    }
    if(array_key_exists("total", $filterParams) && array_key_exists("datepurchased", $filterParams)){
        $totalFilter = $filterParams["total"];
        $datePurchased = $filterParams["datepurchased"];
        $baseQuery = $baseQuery . " ORDER BY created $datePurchased, total_price $totalFilter";
    }
    else if(array_key_exists("total", $filterParams)){
        $totalFilter = $filterParams["total"];
        $baseQuery = $baseQuery . " ORDER BY total_price $totalFilter";
    }
    else if(array_key_exists("datepurchased", $filterParams)){
        $datePurchased = $filterParams["datepurchased"];
        $baseQuery = $baseQuery . " ORDER BY created $datePurchased";
    }

    $statement = $db->prepare($baseQuery);
}

$orders = [];
try{
    if($isStoreOwner){
        if(array_key_exists("startdate", $filterParams)){
            $statement->execute([":startdate" => $startdate, ":enddate" => $enddate]);
        }
        else{
            $statement->execute();
        }
    }
    else{
        if(array_key_exists("startdate", $filterParams)){
            $statement->execute([":userID" => $userID, ":startdate" => $startdate, ":enddate" => $enddate]);
        }
        else{
            $statement->execute([":userID" => $userID]);
        }
    }
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $count = 0;
    foreach($results as $r){
        if($count < 10){
            array_push($orders, $r);
        }
        else{
            break;
        }
        $count++;
    }
}
catch(PDOException $e){
    flash("Failure in obtaining purchase history [$baseQuery] $e", "warning");
}
?>

<div>
    <h1 style="margin-left:0px; margin-bottom:20px">Purchase History</h1>
    <?php if(count($orders) > 0) : ?>
        <form method="GET" onsubmit="return validate(this)" class="formFilters">
            <div>
                <h3>Filters</h3>
            </div>
            <div>
                <label for="startdate">Start Date</label>
                <input type="date" name="startdate" value="<?php (isset($_GET["startdate"])) ? se($_GET, "startdate") : se("") ?>" />
            </div>
            <div>
                <label for="enddate">End Date</label>
                <input type="date" name="enddate" value="<?php (isset($_GET["enddate"])) ? se($_GET, "enddate") : se("") ?>" />
            </div>

            <!-- <label for="category">Category</label>
            <select name="category">
                <option>opt 1</option>
            </select> -->
            <div>
                <label for="total">Total</label>
                <select name="total" >
                    <option value="DESC">Increasing</option>
                    <option value="ASC">Decreasing</option>
                </select>
            </div>
            <div>
                <label for="datepurchased">Date Purchased</label>
                <select name="datepurchased" >
                    <option value="DESC">Most Recent</option>
                    <option value="ASC">Least Recent</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Apply Filters" />
            </div>
        </form>

        <table style="width:98%; margin-top:50px">
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

<script>
    function validate(form){
        let startdate = form.startdate.value;
        let enddate = form.enddate.value;
        let isValid = true;

        if((startdate.length == 0 && enddate.length != 0) || (startdate.length != 0 && enddate.length == 0)){
            flash("Please fill both start date and end date fields for filtering", "info");
            isValid = false;
        }

        return isValid;
    }
</script>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>

