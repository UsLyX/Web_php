<?php
echo '<b>Задание 1</b><br/><br/>';
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
        <td>$product2</td>
        <td>$price2</td>
    </tr>
    <tr>
        <td>$product3</td>
        <td>$price3</td>
    </tr>
</table>
<p>Средняя цена: $sr</p>
";

echo '<b>Задание 2,3</b><br/><br/>';
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


echo '<b>Задание 4</b><br/><br/>';
//Задание 4
$productPrice = 100;
$year = 0;
$inf = 10;
$afterInf = 3.5;
$count = 1;
$count1 = 1;

$years = array();
$prices = array();
$infArray = array();

//цена за первый год с помощью цикла while
while ($year != 1){
    $productPrice += $inf;
    echo 'Цена на товар в конце года будет: '.$productPrice." руб.<br/>";
    $year += 1;
}

//цена за последующие годы с помощью цикла while
while($productPrice < 150){
    $count++;
    $inf += $afterInf;
    $productPrice += $inf;
    echo '<br/>Цена на товар будет: '.$productPrice.' руб. на '.$count.' год';
}

//цена за первый год с помощью цикла for
for($year = 0; $year < 1; $year++){
    $productPrice = 100;
    $inf = 10;
    $productPrice += $inf;
    echo '<br/><br/><br/>Цена на товар в конце года будет: '.$productPrice." руб.<br/>";
    array_push($prices, $productPrice);
    array_push($infArray, $inf);
}

//цена за последующие годы с помощью цикла for
for($year = 1; $year <= 5; $year++){
    $count1 += 1;
    $inf += $afterInf;
    $productPrice += $inf;
    echo '<br/>Цена на товар будет: '.$productPrice.' руб. на '.$count1.' год';
    array_push($years, $year);
    array_push($prices, $productPrice);
    array_push($infArray, $inf);
}

array_pop($infArray);
array_pop($prices);

?>

<table style="border="2" bordercolor="#54DD4"">
    <tr style="text-align: center;">
        <td>Год:</td>
    <?php foreach($years as $year) :?>
        <td><?= $year ?> &emsp; </td>
    <?php endforeach; ?>
    </tr>

    <tr style="text-align: center;">
        <td>Цена:</td>
    <?php foreach($prices as $price) :?>
        <td><?= $price ?> &emsp; </td>
    <?php endforeach; ?>
    </tr>

    <tr style="text-align: center;">
        <td>Инфляция:</td>
    <?php foreach($infArray as $inf) :?>
        <td><?= $inf ?> &emsp; </td>
    <?php endforeach; ?>
    </tr>

</table>

<?php 

$inff = 10;
$productPricee = 100;
for($yearr = 1; $yearr <= 10; $yearr++){
    $productPricee += $inff;
    $inff += 3.5;
    echo $productPricee." ";
    if($productPricee > 170){
        break;
    }
}
for($yearr; $yearr < 10; $yearr++){
    $productPricee -= $inff;
    $inff -= 3.5;
    echo $productPricee." ";
}

?>