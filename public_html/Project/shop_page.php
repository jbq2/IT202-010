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

$params = [];
$toDisplay = [];

$numrowsQuery = "SELECT COUNT(*) AS numrows FROM Products
WHERE visibility = 1 AND stock > 0 ";
$baseQuery = "SELECT * From Products
WHERE visibility = 1 AND stock > 0 ";

if(isset($_GET["search"]) && $_GET["search"] != ""){
    $search = se($_GET, "search", "", false);
    $baseQuery = $baseQuery . "AND name LIKE :search ";
    $numrowsQuery = $numrowsQuery . "AND name LIKE :search ";
    $params[":search"] = "%" . $search . "%";
}
if(isset($_GET["catFilter"]) && $_GET["catFilter"] != "none"){
    $category = $category = se($_GET, "catFilter", "", false);
    $baseQuery = $baseQuery . "AND category = :category ";
    $numrowsQuery = $numrowsQuery . "AND category = :category ";
    $params[":category"] = $category;
}
if(isset($_GET["priceFilter"]) || isset($_GET["ratingFilter"])){
    if(isset($_GET["ratingFilter"]) && $_GET["ratingFilter"] != "none" && isset($_GET["priceFilter"]) && $_GET["priceFilter"] != "none"){
        $price = se($_GET, "priceFilter", "", false);
        $rating = se($_GET, "ratingFilter", "", false);
        $baseQuery = $baseQuery . "ORDER BY avgrating $rating, unit_price $price ";
        $params[":rating"] = $rating;
        $params[":price"] = $price;
    }
    else if(isset($_GET["priceFilter"]) && $_GET["priceFilter"] != "none"){
        $price = se($_GET, "priceFilter", "", false);
        $baseQuery = $baseQuery . "ORDER BY unit_price $price ";
        $params[":price"] = $price;
    }
    else if(isset($_GET["ratingFilter"]) && $_GET["ratingFilter"] != "none"){
        $rating = se($_GET, "ratingFilter", "", false);
        $baseQuery = $baseQuery . "ORDER BY avgrating $rating ";
        $params[":rating"] = $rating;
    }
}

flash($baseQuery, "info");

$per_page = 8;
$statement = $db->prepare($numrowsQuery);
try{
    if(array_key_exists(":search", $params)){
        $statement->bindValue(":search", $params[":search"], PDO::PARAM_STR);
    }
    if(array_key_exists(":category", $params)){
        $statement->bindValue(":category", $params[":category"], PDO::PARAM_STR);
    }
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    flash("Failure in fetching total number of products", "warning");
}

$pages = ceil($result["numrows"]/$per_page);
$page = 1;
if(isset($_GET["page"])){
    $page = $_GET["page"];
}
$offset = (intval($page) - 1) * $per_page;

$params[":offset"] = $offset;
$params[":perpage"] = $per_page;

$statement = $db->prepare($baseQuery . "LIMIT :offset, :perpage ");
try{
    if(array_key_exists(":search", $params)){
        $statement->bindValue(":search", $params[":search"], PDO::PARAM_STR);
    }
    if(array_key_exists(":category", $params)){
        $statement->bindValue(":category", $params[":category"], PDO::PARAM_STR);
    }
    
    $statement->bindValue(":offset", $params[":offset"], PDO::PARAM_INT);
    $statement->bindValue(":perpage", $params[":perpage"], PDO::PARAM_INT);
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
        <label for="priceFilter">Sort By Price </label>
        <select name="priceFilter">
            <option value="none">None</option>
            <option value="ASC">Increasing</option>
            <option value="DESC">Decreasing</option>
        </select>
    </div>
    <div class="filterDrop">
        <label for="ratingFilter">Sort by Rating</label>
        <select name="ratingFilter">
            <option id="none" value="none">None</option>
            <option value="ASC">Increasing</option>
            <option value="DESC">Decreasing</option>
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
                <img src="<?php se($item, "picurl") ?>" alt="item">
                <div class="itemContainer">
                    <h5 style="margin-top:10px" class="itemCardTitle"><b><?php se($item, "name") ?></b></h5>
                    <p>$<?php se($item, "unit_price") ?></p>
                    <?php if(se($item, "avgrating", "", false) == 0) : ?>
                        <p>No Ratings</p>
                    <?php else : ?>
                        <p><?php se($item, "avgrating") ?>/5 &#9733</p>
                    <?php endif; ?>
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

<div id="Pages">
    <?php for($page=1; $page <= $pages; $page++) : ?>
        <?php 
        $hreflink = "shop_page.php?page=$page";
        if(array_key_exists(":search", $params)){
            $hreflink = $hreflink . "&search=" . substr($params[":search"], 1, -1);
        }
        if(array_key_exists(":category", $params)){
            $hreflink = $hreflink . "&catFilter=" . $params[":category"] . "+";
        }
        if(array_key_exists(":rating", $params)){
            $hreflink = $hreflink . "&ratingFilter=" . $params[":rating"];
        }
        if(array_key_exists(":price", $params)){
            $hreflink = $hreflink . "&priceFilter=" . $params[":price"];
        }
        ?>
        <a class="PageNumbers" href="<?php se($hreflink) ?>"><?php se($page) ?></a>
    <?php endfor; ?>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>