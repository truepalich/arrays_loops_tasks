<?php

$arr = array(26, 17, 136, 12, 79, 15);

    $result = 0;
    foreach ($arr as $a) {
        $result += $a*$a;
    }

    echo $result;