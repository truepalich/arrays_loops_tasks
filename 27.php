<?php

$row = 6;
$cols = 4;

$colors = array('red','yellow','blue','gray','maroon','brown','green');

?>

<table cellpadding="1" cellspacing="1" border="1">
    <? for ($i=1; $i<=$row; $i++): ?>
        <tr>
            <? for ($k=1; $k<=$cols; $k++): ?>
                <td style="background-color: <?=$colors[array_rand($colors)]?>" ><?=rand(0,1000)?></td>
            <? endfor; ?>
        </tr>
    <? endfor; ?>
1</table>





