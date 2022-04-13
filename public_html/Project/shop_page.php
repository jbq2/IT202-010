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
        // foreach($products as $item){
        //     if(se($item, "stock") > 0){
        //         $item["stock"] = "Yes";
        //     }
        //     else{
        //         $item["stock"] = "No";
        //     }
        // }
    }
 }
 catch(PDOException $e){
    flash(var_export($e->errorInfo,true), "danger");
 }
?>

<h1>List of Products</h1>
<div class=productsListDiv>
    <table style="margin-bottom:30px;">
        <thead>
            <th>Name</th>
            <th>Descripion</th>
            <th>Price</th>
            <th>Stock</th>
        </thead>
        <tbody>
            <?php foreach($toDisplay as $item) : ?>
                <tr>
                    <td><?php se($item, "name") ?></td>
                    <td><?php se($item, "description") ?></td>
                    <td><?php se($item, "unit_price") ?></td>
                    <td><?php se($item, "stock") ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php
require(__DIR__ . "/../../partials/flash.php");
?>