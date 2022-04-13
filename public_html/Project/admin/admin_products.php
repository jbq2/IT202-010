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
?>

<div class="outestDiv">
    <h1 style="margin-top: 20px">Add Product</h1>

    <form onsubmit="return validate(this)" method="POST">
        <div class="textbox" id="nameDiv">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" />
            <!--  value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" -->
        </div>

        <div class="textbox" id="descDiv">
            <label for="desc">Description:</label>
            <textarea id="desc" name="desc" ></textarea>
            <!-- value="<?php echo isset($_POST['desc']) ? $_POST['desc'] : '' ?>" -->
        </div>

        <div class="textbox" id="categoryDiv">
            <label for="cate">Category:</label>
            <select id="cate" name="cate" >
                <?php foreach ($categories as $cat) : ?>
                    <option id="<?php se($cat, "name") ?>" name="categories[]" value="<?php se($cat, "name") ?> "> <?php se($cat, "name") ?> </option>
                <?php endforeach; ?>
                <!-- for each to get all category options
                select distinct cateogry from products
                for each option 
                value will be category name
                -->
            </select>
        </div>

        <div class="textbox" id="priceDiv">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" />
            <!-- require that the input is a number -->
        </div>

        <div class="textbox" id="stockDiv">
            <label for="stock">Stock:</label>
            <input type="text" id="stock" name="stock" />
            <!-- require that the input is a number -->
        </div>

        <div>
        <h6>Choose Visiblity:</h6>
            <input type="radio" name="vis" value="vis"/>
            <label for="y">Visible</label>
            <br>
            <input type="radio" name="vis" value="invis"/>
            <label for="n">Invisible</label>
        </div>

        <input type="submit" value="Submit"/>
    </form>
</div>

<script>
    //TODO function validate
    function validate(form){
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
            flash("Entered price is invalid (valid example: 10.00)", "warning");
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
    $cate = se($_POST, "cate", "", false);
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
        flash("Please enter a valid price (valid example: 20.00)", "warning");
        $hasError = true;
    }
    if(!preg_match('/^[0-9]+/', $stock)){
        flash("Please enter a valid stock", "warning");
        $hasError = true;
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
        //TODO check if insert works
        if($vis == "vis"){
            $vis = 1;
        }
        else{
            $vis = 0;
        }

        $db = getDB();
        $statement = $db->prepare("INSERT INTO Products(name, description, category, stock, unit_price, visibility)
        VALUES (:name, :desc, :cate, :stock, :price, :vis)");
        try{
            $statement->execute([":name" => $name, ":desc" => $desc, ":cate" => $cate, ":stock" => $stock, ":price" => $price, ":vis" => $vis]);
            flash("Successfully added product $name!", "success");
        }
        catch(PDOException $e){
            flash(var_export($e->errorInfo, true), "danger");
        }
    }
}
?>

<?php
require(__DIR__ . "/../../../partials/flash.php");
?>