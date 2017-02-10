<?php

$arr = array('january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'septemper', 'october', 'november', 'december');
$month = 'february';


foreach ($arr as $a) {

    if ($a == $month) {
        echo "<b>{$a}</b><br/>";
    } else {
        echo $a . "<br/>";
    }

}






