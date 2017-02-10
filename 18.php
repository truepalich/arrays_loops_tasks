<?php

$arr = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');

foreach ($arr as $a) {

    if ($a == 'saturday' || $a == 'sunday') {
        echo "<b>{$a}</b><br/>";
    } else {
        echo $a . "<br/>";
    }

}






