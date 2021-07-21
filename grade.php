<?php

$nilai  = 80;
echo "Nilai: $nilai"; 

switch ($nilai) {
    case ($nilai = 100):
        echo 'nilai A';
        break;
  case ($nilai >= 80):
    echo 'nilai B';
    break;
  case ($nilai >= 70):
    echo 'nilai C';
    break;
    case ($nilai >= 60):
        echo 'nilai D';
        break;
        case ($nilai < 60):
            echo 'nilai E';
            break;
  default:
    echo 'Nilai kosong';
};


