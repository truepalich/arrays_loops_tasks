<?php

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$i = 1;
foreach ($arr as $a) {

    if ($i%3 == 0) {
        $comma = "<br/>";
    } else {
        $comma = ", ";
    }

    echo $a . $comma;

    $i ++;
}






