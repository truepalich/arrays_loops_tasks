<?php

$k = 1;
while ($k <= 10) {

    $i = 1;
    while ($i <= 10) {
        $r = $k*$i;
        echo $k . " x {$i}" . " = " . $r . "<br/>";
        if ($i == 10) {
            echo "<hr/>";
        }
        $i++;
    }

    $k++;
}






