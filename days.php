
<?php

function countdays($bornday) {

    echo $bornday;
    $date = new DateTime($bornday);
    $start = new DateTime(date('Y-m-d'));
    $diff = $start->diff($date);

    echo $diff->d;

  }
  
  countdays('1989-12-31');
  

