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

$itemID = $_GET["id"];
$statement = $db->prepare("SELECT id, name, description, category, unit_price, stock, visibility FROM Products 
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

<h1>Editing Product: <?php se($item, "name")?> (ID: <?php se($item, "id") ?>)</h1>
<div>
    <form onsubmit="return validate(this)" method="POST">
        <div class="textbox">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php se($item, "name")?>">
        </div>

        <div class="textbox">
            <label for="desc">Description:</label>
            <textarea name="desc" ><?php se($item, "description")?></textarea>
        </div>

        <div class="textbox">
            <label for="cate">Category:</label>
            <select name="cate">
                <?php foreach ($categories as $cat) : ?>
                    <option id="<?php se($cat, "name") ?>" name="categories[]" value="<?php se($cat, "name") ?>" ><?php se($cat, "name") ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="textbox">
            <label for="price">Price:</label>
            <input type="text" name="price" value="<?php se($item, "unit_price")?>" >
        </div>

        <div class="textbox" >
            <label for="stock">Stock:</label>
            <input type="text" name="stock" value="<?php se($item, "stock")?>" />
            <!-- require that the input is a number -->
        </div>

        <div>
        <h6>Choose Visiblity:</h6>
            <input class="radioClass" type="radio" name="vis" value="vis"/>
            <label class="radioLabel" for="y">Visible</label>
            <br>
            <input class="radioClass" type="radio" name="vis" value="invis"/>
            <label class="radioLabel" for="n">Invisible</label>
        </div>

        <input type="submit" value="Submit">
    </form>
</div>

<script>
    //TODO function validate
    function validate(form){
        document.getElementById("flash").innerHTML = "";
        let name = form.name.value;
        let desc = form.desc.value;
        let cate = form.cate.value;
        let price = form.price.value;
        let stock = form.stock.value;
        let vis = form.vis.value;
        let isValid = true;

        if(name == ""){
            flash("Name must not be empty", "warning");
            isValid = false;
        }
        if(desc == ""){
            flash("Description must not be empty", "warning");
            isValid = false;
        }
        if(cate == ""){
            flash("The product must belong to a category", "warning");
            isValid = false;
        }
        if(price == ""){
            flash("Price must not be empty", "warning");
            isValid = false;
        }
        if(stock == ""){
            flash("Stock must not be empty", "warning");
            isValid = false;
        }
        if(vis == ""){
            flash("Choose a visibility option", "warning");
            isValid = false;
        }

        if(price != "" && !/^[0-9]{1,8}\.[0-9]{1,2}/.test(price)){
            flash("Entered price is invalid (valid example: 10.00, must be less than 10000000.00)", "warning");
            isValid = false;
        }
        if(stock != "" && !/^[0-9]+/.test(stock)){
            flash("Entered stock is invalid", "warning");
            isValid = false;
        }

        return isValid;
    }
</script>

<?php 
if(isset($_POST["name"]) && isset($_POST["desc"])  && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["vis"])){
    $name = se($_POST, "name", "", false);
    $desc = se($_POST, "desc", "", false);
    $cate = se($_POST, "cate", "", false) . " ";
    $price = se($_POST, "price", "", false);
    $stock = se($_POST, "stock", "", false);
    $vis = se($_POST, "vis", "", false);
    $hasError = false;

    if(empty($name)){
        flash("Name must not be empty", "warning");
        $hasError = true;
    }
    if(empty($desc)){
        flash("Description must not be empty", "warning");
        $hasError = true;
    }
    if(empty($price)){
        flash("Price must not be empty", "warning");
        $hasError = true;
    }
    if(empty($stock)){
        flash("Stock must not be empty", "warning");
        $hasError = true;
    }
    if(empty($vis)){
        flash("Please choose a visibility", "warning");
        $hasError = true;
    }

    if(!preg_match('/^[0-9]{1,8}\.[0-9]{1,2}/', $price)){
        flash("Entered price is invalid (valid example: 10.00, must be less than 10000000.00)", "warning");
        $hasError = true;
    }
    if(!preg_match('/^[0-9]+/', $stock)){
        flash("Please enter a valid stock", "warning");
        $hasError = true;
    }

    if(floatval($price) > 10000000.00){
        flash("Entered price exceeds max.  Price was set to 10000000.00", "info");
        $price = 10000000.00;
    }
    if(floatval($price) < 0.00){
        flash("Entered price exceeds minimum.  Price was set to 0.00", "info");
        $price = 0.00;
    }
    if(intval($stock) > 200000000){
        flash("Entered stock exceeds max. Stock was set to 200000000", "info");
        $stock = "200000000";
    }
    if(intval($stock) < 0){
        flash("Entered stock exceeds minimum. Stock was set to 0", "info");
        $stock = "0";
    }

    if(!$hasError){
        //TODO update statement
        if($vis == "vis"){
            $vis = 1;
        }
        else{
            $vis = 0;
        }

        $db = getDB();
        $statement = $db->prepare("UPDATE Products 
        SET name = :name, description = :desc, category = :category, unit_price = :price, stock = :stock, visibility = :vis
        WHERE id = :id");
        try{
            $statement->execute([":name" => $name, ":desc" => $desc, ":category" => $cate, ":price" => $price, ":stock" => $stock, ":vis" => $vis, ":id" => $itemID]);
            flash("Successfully edited product $name!", "success");
        }
        catch(PDOException $e){
            flash("Query error occured", "danger");
            flash(var_export($e->errorInfo, true), "danger");
        }
    }
}
?>

<style>
.radioClass{
    display:inline;
}
.radioLabel{
    display:inline;
}
</style>

<?php
require(__DIR__ . "/../../../partials/flash.php");
?>