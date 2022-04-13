<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<?php
 $products = [];
 $db = getDB();
 $statement = $db->prepare("SELECT name, description, category, stock, unit_price, visibility FROM Products 
 WHERE visibility=1");
 try{
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if($results){
        $products = $results;
        $toDisplay = [];
        $count = 0;
        foreach($products as $item){
            if($count < 10){
                $toDisplay[$count] = $item;
            }
            else{
                break;
            }
            $count++;
        }
    }
 }
 catch(PDOException $e){
    flash(var_export($e->errorInfo,true), "danger");
 }

$categories = [];
$db = getDB();
$statement = $db->prepare("SELECT * FROM Category");
try{
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if($results){
        $categories = $results;
    }
}
catch(PDOException $e){
    flash(var_export($e->errorInfo, true), "danger");
}
?>

<h1>List of Products</h1>
<form onsubmit="return validate(this)" class="formFilters" method="POST">
    <div class="filterSearch">
        <label for="search">Search: </label>
        <input type="text" name="search">
    </div>
    <div class="filterDrop">
        <label for="catFilter">Filter By Category: </label>
        <select name="catFilter">
            <option id="none" value="none">None</option>
            <?php foreach ($categories as $cat) : ?>
                <option id="<?php se($cat, "name") ?>" name="categories[]" value="<?php se($cat, "name") ?> "> <?php se($cat, "name") ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="filterDrop">
        <label for="priceFilter">Filter By Price: </label>
        <select name="priceFilter">
            <option id="none" value="none">None</option>
            <option value="ASC">Increasing</option>
            <option value="DESC">Decreasing</option>
        </select>
    </div>
    <div><input type="submit" value="Submit"></div>
</form>

<div class=productsListDiv>
    <?php foreach($toDisplay as $item) : ?>
        <div class="itemCard">
            <img src="https://blog.focusinfotech.com/wp-content/uploads/2017/12/default-placeholder-300x300.png" alt="item">
            <div class="itemContainer">
                <h5 style="margin-top:10px" class="itemCardTitle"><b><?php se($item, "name") ?></b></h5>
                <p>$<?php se($item, "unit_price") ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    //TODO check if any other checks are necessary on client side
    function validate(form){
        return true;
    }
</script>

<?php 
//TODO apply filters
$toDisplay = [];
$filterList = ["applySearch" => false, "applyCategory" => false, "applyPrice" => false];

if($_POST(["search"]) != ""){
    $filterList["applySearch"] = true;
}
if($_POST(["catFilter"]) != "none"){
    $filterList["applyCategory"] = true;
}
if($_POST(["priceFilter"]) != "none"){
    $filterList["applyPrice"] = true;
}

if($filterList["applySearch"]){
    if($filterList["applyCategory"]){
        if($filterList["applyPrice"]){//if all 3 filters are applied
            //TODO write query to populate toDisplay
        }
        else{//if only search and category are filtered
            //TODO write query to populate toDisplay
        }
    }
    else{//if only search is filtered
        
    }
}
else if($filterList["applyCategory"]){
    if($filterList["applyPrice"]){//if price and category are filtered
        //TODO write query to populate toDisplay
    }
    else{//if only category filtered
        //TODO write query to populate toDisplay
    }
}
else if($filterList["applyPrice"]){//if only price filtered
    //TODO write query to populate toDisplay
}
else{
    //TODO display normally
    //TODO write query to populate toDisplay
}

?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>