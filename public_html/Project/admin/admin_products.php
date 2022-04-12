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
    <h1>Enter Product</h1>

    <form onsubmit="return true" method="POST">
        <div class="textbox" id="nameDiv">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" />
        </div>

        <div class="textbox" id="descDiv">
            <label for="desc">Description:</label>
            <textarea id="desc" name="desc" ></textarea>
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
            <input type="radio" id="y" name="vis" value="1"/>
            <label for="y">Visible</label>
            <br>
            <input type="radio" id="n" name="vis" value="0"/>
            <label for="n">Invisible</label>
        </div>

        <input type="submit" value="Submit"/>
    </form>
</div>

<script>
    //TODO function validate
    function validate(form){
        
    }
</script>

<?php
if(isset($_POST["name"]) && isset($_POST["desc"]) && isset($_POST["cate"]) && isset($_POST["price"]) && isset($_POST["stock"]) && isset($_POST["vis"])){
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

    if(!preg_match('/^[0-9]{1,8}.[0-9]{1,2}/', $price)){
        flash("Please enter a valid price (excluding $ symbol)", "warning");
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
        //TODO insert into products
    }
}
?>

<?php
require(__DIR__ . "/../../../partials/flash.php");
?>