<?php
$a1 = [-1, -2, -3, -4, -5, -6, -7, -8, -9, -10];
$a2 = [-1, 1, -2, 2, 3, -3, -4, 5];
$a3 = [-0.01, -0.0001, -.15];
$a4 = ["-1", "2", "-3", "4", "-5", "5", "-6", "6", "-7", "7"];
//PROBLEM 3
//UCID: jbq2
//Course: IT202-010
//Date: 13 February 2022
function bePositive($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    echo "<br>Positive output:<br>";
    //TODO use echo to output all of the values as positive (even if they were originally positive)
    $posArr = array();
    for($i = 0; $i < count($arr); $i++){
        if(strcmp(gettype($arr[$i]), "string") == 0){
            if((int)($arr[$i]) < 0){
                array_push($posArr, (int)($arr[$i]) * -1);
            }
            else{
                array_push($posArr, (int)$arr[$i]);
            }
        }
        else{
            if($arr[$i] < 0){
                array_push($posArr, $arr[$i] * -1);
            }
            else{
                array_push($posArr, $arr[$i]);
            }
        }
    }

    //iterate through posArr to echo and output pos vals
    for($i = 0; $i < count($posArr); $i++){
        echo "$posArr[$i] ";
    }
}
echo "Problem 3: Be Positive<br>";
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
                <?php bePositive($a1); ?>
            </td>
            <td>
                <?php bePositive($a2); ?>
            </td>
            <td>
                <?php bePositive($a3); ?>
            </td>
            <td>
                <?php bePositive($a4); ?>
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