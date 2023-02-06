<?php

$n = 1000;
$sum = 0;

while($sum <= $n){
    $sum += rand(50, 150);
    echo 'Сумма равна: '.$sum.'<br/>';
}

?>