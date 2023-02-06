<?php 
$product1 = "Чайник";
$product2 = "Кофейник";
$product3 = "Кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 270;
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
            echo 'Самый дешёвый '.$product1.' (он стоит '.$max_price. ' рублей)<br/><br/>';
        }
    
        /*  А если цена первого товара меньше чем цена хотя бы одного из двух товаров, 
            то сравниваем цену второго товара с третьим и если цена второго товара больше,
            то записываем данные о втором товаре в переменные и выводим их  */
        else if($price2 < $price3){
            $max_price = $price2;
            $max_product = $product2;
            echo 'Самый дешёвый '. $max_product.' (он стоит '.$max_price. ' рублей)<br/><br/>';
        }
    
        /* Иначе, записываем данные о третьим товаре в переменные и выводим их, 
            так как в таком случае, третий товар будет имень самую большую цену */ 
        else {
            $max_price = $price3;
            $max_product = $product3;
            echo 'Самый дешёвый '. $max_product.' (он стоит '.$max_price. ' рублей)<br/><br/>';
        }

}

echo mostExpensiveProduct($product1,$product2,$product3,$price1,$price2,$price3);
echo minExpensiveProduct($product1,$product2,$product3,$price1,$price2,$price3);

?>