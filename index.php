<?php
//1 задание
$product1 = "Чайник";
$product2 = "Кофейник";
$product3 = "Кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 270;
$arr = array($price1, $price2, $price3);


$var = $product1.' = '.$price1.'<br/>'.$product2.' = '.$price2.'<br/>'.$product3.' = '.$price3;
echo $var;
$sr = ' '.sr($arr, $price1, $price2, $price3);

function sr($arr){
    return 'Средняя цена товаров = '.($arr[0] + $arr[1] + $arr[2])/count($arr);
}

echo "
</br>
</br>
<table>
    <tr>
        <td>Товар</td>
        <td>Цена</td>
    </tr>
    <tr>
        <td>$product1</td>
        <td>$price1</td>
    </tr>
    <tr>
        <td>Т$product2</td>
        <td>$price2</td>
    </tr>
    <tr>
        <td>$product3</td>
        <td>$price3</td>
    </tr>
</table>
<p>Средняя цена: $sr</p>
"
?>