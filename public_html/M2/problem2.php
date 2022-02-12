<?php
$a1 = [10.001, 11.591, 0.011, 5.991, 16.121, 0.131, 100.981, 1.001];
$a2 = [1.99, 1.99, 0.99, 1.99, 0.99, 1.99, 0.99, 0.99];
$a3 = [0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01];
$a4 = [10.01, -12.22, 0.23, 19.20, -5.13, 3.12];
//PROBLEM 2
//UCID: jbq2
//Course: IT202-010
//Date: 13 February 2022
function getTotal($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    $total = 0.00;
    //TODO do adding here
    $i = 0;
    while($i < count($arr)){
        $total = $total + $arr[$i];
        $i++;
    }

    //TODO do rounding stuff here
    $total = round($total, 2);
    $charsTotal = str_split((string)$total);
    $c = strlen((string)$total) - 1;
    if($charsTotal[$c - 2] != '.'){
        array_push($charsTotal, 0);
    }
    $total = implode($charsTotal);

    // echo "The total is " . var_export($total, true);
    echo "The total is " . "$total";
    $total = (float)$total;
}
echo "Problem 2: Adding Floats<br>";
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
                <?php getTotal($a1) ?>
            </td>
            <td>
                <?php getTotal($a2) ?>
            </td>
            <td>
                <?php getTotal($a3) ?>
            </td>
            <td>
                <?php getTotal($a4); ?>
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