<?php
require(__DIR__ . "/../../../partials/nav.php");

if(!is_logged_in()){
    flash("You must be logged in to view this page", "warning");
    die(header("Location: " . get_url("login.php")));
}

if(!has_role("Admin") && !has_role("Shop Owner")){
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "/home.php"));
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

//TODO apply filters
$params = [];
$toDisplay = [];

$baseQuery = "SELECT * From Products
WHERE 1=1 ";
if(isset($_GET["search"])){
    $search = se($_GET, "search", "", false);
    $baseQuery = $baseQuery . "AND name LIKE :search ";
    $params[":search"] = "%" . $search . "%";
}
if(isset($_GET["catFilter"]) && $_GET["catFilter"] != "none"){
    $category = $category = se($_GET, "catFilter", "", false);
    $baseQuery = $baseQuery . "AND category = :category ";
    $params[":category"] = $category;
}
if(isset($_GET["stockFilter"]) && $_GET["stockFilter"] != "none"){
    $stock = se($_GET, "stockFilter", "", false);
    $baseQuery = ($stock == "in") ? $baseQuery . "AND stock != 0 " : $baseQuery . "AND stock = 0 " ;
}
if(isset($_GET["priceFilter"]) && $_GET["priceFilter"] != "none"){
    $price = se($_GET, "priceFilter", "", false);
    $baseQuery = $baseQuery . "ORDER BY unit_price $price ";
}

$statement = $db->prepare($baseQuery);
try{
    if(array_key_exists(":search", $params)){
        $statement->bindValue(":search", $params[":search"], PDO::PARAM_STR);
    }
    if(array_key_exists(":category", $params)){
        $statement->bindValue(":category", $params[":category"], PDO::PARAM_STR);
    }
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $toDisplay = $results;
}
catch(PDOException $e){
    flash("Failed to fetch shop items $e", "warning");
}
?>

<h1>List of Products (Admin/Shop Owner View)</h1>
<form onsubmit="return validate(this)" class="formFilters" method="GET">
    <div class="filterSearch">
        <label for="search">Search </label>
        <input type="text" name="search" value="">
    </div>
    <div class="filterDrop">
        <label for="catFilter">Category </label>
        <select name="catFilter">
            <option id="none" value="none">All</option>
            <?php foreach ($categories as $cat) : ?>
                <option id="<?php se($cat, "name") ?>" name="categories[]" value="<?php se($cat, "name") ?> "> <?php se($cat, "name") ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="filterDrop">
        <label for="priceFilter">Price </label>
        <select name="priceFilter">
            <option value="none">None</option>
            <option value="ASC">Increasing</option>
            <option value="DESC">Decreasing</option>
        </select>
    </div>
    <div class="filterDrop">
        <label for="stockFilter">Stock </label>
        <select name="stockFilter">
            <option value="none">All</option>
            <option value="in">In Stock</option>
            <option value="out">Out of Stock</option>
        </select>
    </div>
    <div><input type="submit" value="Submit"></div>
</form>

<style>
    .editButton{
        margin-left:0px;
        margin-bottom:10px;
        height:px;
        padding-top:0px;
        padding-bottom:0px;
        padding-left:10px;
        padding-right:10px;
    }
</style>

<div class=productsListDiv>
    <?php foreach($toDisplay as $item) : ?>
        <div class="itemCard">
            <a href="/Project/product_info.php?id=<?php se($item, "id") ?>" style="display:inline-block;text-decoration:none; color:white" value="<?php se($item, "name") ?>">
                <div class="itemContainer">
                    <h5 style="margin-top:10px; display:inline-block" class="itemCardTitle"><b><?php se($item, "name") ?></b></h5>
                    <p>$<?php se($item, "unit_price") ?></p>
                </div>
            </a>
            <br>
            <button style="margin-left:20px;display:inline-block" class="editButton" type="submit" name="Edit" onclick="location.href='admin_edit_product.php?id=<?php se($item, 'id') ?>'">Edit</button>
            <?php if($item["visibility"] == 1) : ?>
                <p style="margin-left:10px;display:inline-block"><i>(Visible)</i></p>
            <?php else : ?>
                <p style="margin-left:10px;display:inline-block"><i>(Invisible)</i></p>
            <?php endif; ?>
            <?php if($item["stock"] == 0) : ?>
                <p style="margin-left:10px;display:inline-block"><b>(NO STOCK)</b></p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<script>
    //TODO check if any other checks are necessary on client side
    function validate(form){
        let inSearch = form.search.value;
        let inCategory = form.catFilter.value;
        let inPrice = form.priceFilter.value;
        isValid = true;

        if(empty(inSearch)){
            isValid = false;
        }
        if(empty(inCategory)){
            isValid = false;
        }
        if(empty(inPrice)){
            isValid = false;
        }

        return isValid;
    }
</script>

<?php
require(__DIR__ . "/../../../partials/flash.php");
?>