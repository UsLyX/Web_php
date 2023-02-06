<?php

$array = array('Груша', 'Банан', 'Арбуз', 'Огурец', 'Дыня');

array_push($array,'Яблоко', 'Печенье');

print_r($array);

foreach($array as $element){
    echo '<br/>'.$element;
}
echo '<br/>';

asort($array);

foreach($array as $element){
    echo '<br/>'.$element;
}

?>