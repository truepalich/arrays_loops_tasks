<?php

$i=1;
while ($i<=9) {
    if ($i == 1) {
        $x = 1;
    } else {

        $new_arr = str_split($x);

        foreach ($new_arr as $k => $v) {
            $new_arr[$k] = $i;
        }

        $x = implode("", $new_arr);

        $x .= $i;
    }
    echo $x . "<br/>";

    $i++;
}










