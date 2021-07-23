<?php

$json_file = file_get_contents('names.json');
$json_nama = json_decode($json_file,true);

foreach ($json_nama as $key => $value) {
    $firstStringCharacter = substr($json_nama[$key]["name"], 0, 1);
    echo $firstStringCharacter;
}
?>


