<?php

for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}

$max_value = max($arr);
$min_value = min($arr);


$new_arr = $arr;

$max_key = array_search($max_value, $new_arr);
$min_key = array_search($min_value, $new_arr);

$new_arr[$max_key] = $min_value;
$new_arr[$min_key] = $max_value;


?>


<pre>
    <h2>Первоначальный массив:</h2>
    <?=print_r($arr)?>
    <hr/>
    <?="Максимальное значение: {$max_value}"?>
    <hr/>
    <?="Минимальное значение: {$min_value}"?>
    <hr/>
    <h2>Массив с измененными ключами:</h2>
    <?=print_r($new_arr)?>
</pre>






