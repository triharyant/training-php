<?php

$json = file_get_contents('bill.json');
$n = 0;
$total = 0;
$json_data = json_decode($json,true);

foreach ($json_data as $key => $value) {
    $n = $json_data[$key]["price"] * $json_data[$key]["qty"];
    $total += $n;
}

echo "$total";
?>

