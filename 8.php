<?php

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

    $i = 1;
    foreach ($arr as $a) {
        $result =  "-" . $a;
        if (count($arr) == $i) {
            $result .= "-";
        }

        echo $result;

        $i++;
    }




