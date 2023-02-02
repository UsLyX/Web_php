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
";

//Задание 2,3 
function mostExpensiveProduct($product1,$product2,$product3,$price1,$price2,$price3){

    /*  если цена первого товара больше чем цена остальных двух товаров, 
        то записываем данные о первом товаре в переменные и выводим их   */
    if($price1 > $price2 && $price1 > $price3){
        $max_price = $price1;
        $max_product = $product1;
        echo 'Самый дорогой '.$product1.' (он стоит '.$max_price. ' рублей)<br/>';
    }

    /*  А если цена первого товара меньше чем цена хотя бы одного из двух товаров, 
        то сравниваем цену второго товара с третьим и если цена второго товара больше,
        то записываем данные о втором товаре в переменные и выводим их  */
    else if($price2 > $price3){
        $max_price = $price2;
        $max_product = $product2;
        echo 'Самый дорогой '. $max_product.' (он стоит '.$max_price. ' рублей)<br/>';
    }

    /* Иначе, записываем данные о третьим товаре в переменные и выводим их, 
        так как в таком случае, третий товар будет имень самую большую цену */ 
    else {
        $max_price = $price3;
        $max_product = $product3;
        echo 'Самый дорогой '. $max_product.' (он стоит '.$max_price. ' рублей)<br/>';
    }

}

function minExpensiveProduct($product1,$product2,$product3,$price1,$price2,$price3){

    /* Если значение переменной цены первого товара больше цены второго и третьего товара, 
        то выводим переменные с первым товаром */
        if($price1 < $price2 && $price1 < $price3){
            $max_price = $price1;
            $max_product = $product1;
            echo 'Самый дешёвый '.$product1.' (он стоит '.$max_price. ' рублей)<br/>';
        }
    
        /*  А если цена первого товара меньше чем цена хотя бы одного из двух товаров, 
            то сравниваем цену второго товара с третьим и если цена второго товара больше,
            то записываем данные о втором товаре в переменные и выводим их  */
        else if($price2 < $price3){
            $max_price = $price2;
            $max_product = $product2;
            echo 'Самый дешёвый '. $max_product.' (он стоит '.$max_price. ' рублей)<br/>';
        }
    
        /* Иначе, записываем данные о третьим товаре в переменные и выводим их, 
            так как в таком случае, третий товар будет имень самую большую цену */ 
        else {
            $max_price = $price3;
            $max_product = $product3;
            echo 'Самый дешёвый '. $max_product.' (он стоит '.$max_price. ' рублей)<br/>';
        }
    
}

echo mostExpensiveProduct($product1,$product2,$product3,$price1,$price2,$price3);
echo minExpensiveProduct($product1,$product2,$product3,$price1,$price2,$price3);
?>