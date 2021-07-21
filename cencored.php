<?php

$kalimat  = 'hari ini saya ingin pergi ke pasar';
echo "Input kalimat: $kalimat" . "<br />\n"; 

$list = array('saya','pasar');
$replace = array('****','*****');

$censored_output = str_ireplace($list,$replace,$kalimat);
echo "Output kalimat: $censored_output";

