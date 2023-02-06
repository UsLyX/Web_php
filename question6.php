<?php

$array = array(
    'Чайник' => 1000,
    'Микроволновка' => 3000,
    'Холодильник' => 30000
);

$anotherArray = array('Тостер' => 800, 'Кофемолка' => 1500);

$array += $anotherArray;

foreach($array as $key => $element){
    echo $key.' = '.$element.'<br/>';
}
echo 'Количество товаров: '.count($array).'<br/>';
echo 'Их суммарная стоимость: '.array_sum($array).'<br/>';

echo '<br/> Отсортированный массив по возростанию значения: '.'<br/>';
asort($array);
foreach($array as $element){
    echo $element.'<br/>';
}

echo '<br/> Отсортированный массив по убыванию значения: '.'<br/>';
arsort($array);
foreach($array as $element){
    echo $element.'<br/>';
}

echo '<br/> Отсортированный массив по возростанию ключа: '.'<br/>';
ksort($array);
foreach($array as $key => $element){
    echo $key.'<br/>';
}
echo '<br/> Отсортированный массив по убыванию ключа: '.'<br/>';
krsort($array);
foreach($array as $key => $element){
    echo $key.'<br/>';
}
?>