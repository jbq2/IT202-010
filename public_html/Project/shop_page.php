<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<?php
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
WHERE visibility = 1 ";
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
if(isset($_GET["ratingFilter"]) && $_GET["ratingFilter"] != "none"){
    $rating = se($_GET, "ratingFilter", "", false);
    $baseQuery = $baseQuery . "AND avgrating >= :lowerbound AND avgrating < :upperbound ";
    $params[":lowerbound"] = intval($rating);
    $params[":upperbound"] = intval($rating) + 1;
}
if(isset($_GET["priceFilter"])){
    $price = se($_GET, "priceFilter", "", false);
    $baseQuery = $baseQuery . "ORDER BY unit_price $price ";
}

$statement = $db->prepare($baseQuery . "LIMIT 10");
try{
    if(array_key_exists(":search", $params)){
        $statement->bindValue(":search", $params[":search"], PDO::PARAM_STR);
    }
    if(array_key_exists(":category", $params)){
        $statement->bindValue(":category", $params[":category"], PDO::PARAM_STR);
    }
    if(array_key_exists(":lowerbound", $params)){
        $statement->bindValue(":lowerbound", $params[":lowerbound"], PDO::PARAM_INT);
        $statement->bindValue(":upperbound", $params[":upperbound"], PDO::PARAM_INT);
    }
    flash($baseQuery, "info");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $toDisplay = $results;
}
catch(PDOException $e){
    flash("Failed to fetch shop items $e", "warning");
}
?>

<h1>List of Products</h1>
<form onsubmit="return validate(this)" class="formFilters" method="GET">
    <div class="filterSearch">
        <label for="search">Search </label>
        <input type="text" name="search" value="">
    </div>
    <div class="filterDrop">
        <label for="catFilter">Filter By Category </label>
        <select name="catFilter">
            <option id="none" value="none">All</option>
            <?php foreach ($categories as $cat) : ?>
                <option id="<?php se($cat, "name") ?>" name="categories[]" value="<?php se($cat, "name") ?> "> <?php se($cat, "name") ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="filterDrop">
        <label for="priceFilter">Filter By Price </label>
        <select name="priceFilter">
            <option value="ASC">Increasing</option>
            <option value="DESC">Decreasing</option>
        </select>
    </div>
    <div class="filterDrop">
        <label for="ratingFilter">Filter by Rating</label>
        <select name="ratingFilter">
            <option id="none" value="none">All</option>
            <option value="5">5 &#9733</option>
            <option value="4">4 &#9733</option>
            <option value="3">3 &#9733</option>
            <option value="2">2 &#9733</option>
            <option value="1">1 &#9733</option>
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
            <a href="product_info.php?id=<?php se($item, "id") ?>" style="text-decoration:none; color:white" value="<?php se($item, "name") ?>">
                <img src="https://blog.focusinfotech.com/wp-content/uploads/2017/12/default-placeholder-300x300.png" alt="item">
                <div class="itemContainer">
                    <h5 style="margin-top:10px" class="itemCardTitle"><b><?php se($item, "name") ?></b></h5>
                    <p>$<?php se($item, "unit_price") ?></p>
                    <p><?php se($item, "avgrating") ?>/5 &#9733</p>
                </div>
            </a>
            <?php if(is_logged_in() && (has_role("Admin") || has_role("Shop Owner"))) : ?>
                <button style="margin-left:20px;display:inline-block" class="editButton" type="submit" name="Edit" onclick="location.href='/Project/admin/admin_edit_product.php?id=<?php se($item, 'id') ?>'">Edit</button>
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
require(__DIR__ . "/../../partials/flash.php");
?>