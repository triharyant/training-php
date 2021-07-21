<?php

$kalimat  = 'kasur ini rusak';
echo "kalimat: $kalimat" . "<br />\n"; 

if (strrev($kalimat) == $kalimat){ 
    echo " output: true"; 
}
else{
    echo "output: false";
}

