<?php

for ($i = 1; $i < 101; $i++) {
    echo $i;
    if($i%5 == 0) {
         if($i%3 == 0) {
            echo 'tuing' ;
        }
        else echo 'pong' ;
    }
    if($i%3 == 0) {
        if($i%5 == 0) {
           echo '';
       }
       else echo 'ping' ;
   }
    echo "<br />\n";

  }
  

