<?php

    require_once 'connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['decription'];

    $mysql->query("INSERT INTO `products`(`name`,`price`,`description`) VALUES('$name','$price','$description')");

    
    function selectProduct(){
        require 'connect.php';
        $products = $mysql->query("SELECT `id`, `name`, `price`, `description` FROM `products`");
        $products = $products->fetch_all();
        foreach ($products as $product){
            echo 
            '
            <div class="product">
                <p>Название товара:'.$product['1'].'</p>
                <p>Цена:'.$product['2'].'</p>
                <p>Описание:'.$product['3'].'</p>
            </div>
            ';
        }
    }
    
    $mysql->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="question2.css">
    <title>Document</title>
</head>
<body>
    <form action="question2.php" method="post">
        <h1>Продукты</h1>
        <input type="text" placeholder="Введите название продукта" name="name">
        <input type="text" placeholder="Введите цену продукта" name="price">
        <input type="text" placeholder="Введите описание продукта" name="decription">
        <button>Добавить продукт</button>
    </form>
    <div>
        <p>Список продуктов</p>
        <?php selectProduct() ?>
    </div>
</body>
</html>