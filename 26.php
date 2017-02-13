<?php

for($i=0; $i<100; $i++) {
    $arr[$i] = rand(0,100);
}

$pair_array = array();
$unpair_array = array();

$i = 0;
foreach ($arr as $k => $v) {
    if ($v > 0) {
        if ($k%2 == 0) {
            $pair_array[$i] = $v;
        } else {
            $unpair_array[$i] = $v;
        }
    }
    $i ++;
}

$result = 1;
foreach ($pair_array as $k => $v) {
    $result = $result*$v;
}


?>

<pre>
    <?="Произведение тех элементов, которые больше ноля и у которых парные индексы: {$result}";?>
    <hr>
    <h2>Элементы, которые больше ноля и у которых не парный индекс:</h2>
    <?=print_r($unpair_array);?>
</pre>







