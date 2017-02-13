<?php

for ($k = 1; $k <= 10; $k++) {

    for ($i = 1; $i <= 10; $i++) {
        $r = $k*$i;
        echo $k . " x {$i}" . " = " . $r . "<br/>";
        if ($i == 10) {
            echo "<hr/>";
        }

    }


}



