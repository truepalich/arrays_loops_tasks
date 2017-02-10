<?php

$n = 1000;
$i = 1;
while ($i < $n) {
    $n = $n / 2;
    if ($n < 50) {

        $num = $i;

        echo "Число: " . $n . "<br/>";
        echo "К-во итераций: " . $num . "<br/>";
        break;
    }

    $i++;
}






