<?php

$arr = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');

$day = 'friday';

foreach ($arr as $a) {

    if ($a == $day) {
        echo "<i>{$a}</i><br/>";
    } else {
        echo $a . "<br/>";
    }

}






