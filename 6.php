<?php

    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

    foreach ($arr as $e => $r) {
        $en[] =  $e;
        $ru[] =  $r;
    }


    echo '<pre>';
    var_dump($en);
    echo '</pre>';

    echo '<pre>';
    var_dump($ru);
    echo '</pre>';
