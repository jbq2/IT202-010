<?php
$a1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$a2 = [0, 1, 3, 5, 7, 9, 2, 4, 6, 8, 10];
$a3 = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
$a4 = [0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10];
//PROBLEM 1
//UCID: jbq2
//Course: IT202-010
//Date: 13 February 2022
function processArray($arr) {
    //use the $arr variable to iterate over
    $oddArr = array();
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] % 2 == 1){
            array_push($oddArr, $arr[$i]);
        }
    }

    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    echo "<br>Odds output:<br>";
    //TODO add logic here to echo out only odd values
    for($i = 0; $i < count($oddArr); $i++){
        echo "$oddArr[$i] ";
    }

}
echo "Problem 1: Odd Output<br>";
?>
<table>
    <thread>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
        <th>A4</th>
    </thread>
    <tbody>
        <tr>
            <td>
                <?php processArray($a1); ?>
            </td>
            <td>
                <?php processArray($a2); ?>
            </td>
            <td>
                <?php processArray($a3); ?>
            </td>
            <td>
                <?php processArray($a4); ?>
            </td>
        </tr>
</table>
<style>
    table {
        border-spacing: 2em 3em;
        border-collapse: separate;
    }

    td {
        border-right: solid 1px black;
        border-left: solid 1px black;
    }
</style>