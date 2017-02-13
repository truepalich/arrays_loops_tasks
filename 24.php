<?php

$choice_numb = 5;
$numb = 442158755745;
$new_arr = str_split($numb);

if (in_array($choice_numb, $new_arr)) {
    $q=0;
    foreach($new_arr as $n) {
        if ($n == $choice_numb) {
            $q += 1;
        }
    }
    echo "Количество вхождений: {$q}";
} else {
    echo "Количество вхождений: 0";
}













