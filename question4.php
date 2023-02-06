<?php 

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
    $year = 1;
    $inf = 10;
    $productPrice += $inf;
    echo '<br/><br/><br/>Цена на товар в конце года будет: '.$productPrice." руб.<br/>";
    array_push($years, $year++);
    array_push($prices, $productPrice);
    array_push($infArray, $inf);
}

//цена за последующие годы с помощью цикла for
for($year = 2; $year <= 5; $year++){
    //$count1 += 1;
    $inf += $afterInf;
    $productPrice += $inf;
    echo '<br/>Цена на товар будет: '.$productPrice.' руб. на '.$year.' год';
    array_push($years, $year);
    array_push($prices, $productPrice);
    array_push($infArray, $inf);
}

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