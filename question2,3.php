<?php

    require_once 'connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['decription'];
    $currentCountry = $_POST['country'];
    
    //привязка страны по айдишнику
    $countries = $mysql->query("SELECT * FROM `countries`");

        foreach($countries as $country){;
            if($country['name_c'] == $currentCountry){
                $currentCountry = $country['id_c'];
            }
            
        }


    $mysql->query("INSERT INTO `products`(`name`,`price`,`description`,`countries`) VALUES('$name','$price','$description','$currentCountry')");

    
    function selectProduct(){
        require 'connect.php';
        $products = $mysql->query("SELECT `products`.`name`,`products`.`price`,`products`.`description`,`countries`.`name_c` FROM `products`, `countries` WHERE `countries`.`id_c`=`products`.`countries`");

        $products = $products->fetch_all();
        foreach ($products as $product){

            echo 
            '
            <div class="product">
                <p>Название товара: '.$product[0].'</p>
                <p>Цена: '.$product[1].'</p>
                <p>Описание: '.$product[2].'</p>
                <p>Страна производитель: '.$product[3].'</p>
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
        <input type="text" placeholder="Введите название продукта" name="name" />
        <input type="text" placeholder="Введите цену продукта" name="price" />
        <input type="text" placeholder="Введите описание продукта" name="decription" />
        <input placeholder="Введите страну производителя" name="country" list="countries">
        <datalist id="countries">
            <option value="Россия" />
            <option value="Китай" />
            <option value="Казахстан" />
            <option value="США" />
        </datalist>
        
        <button>Добавить продукт</button>
    </form>
    <div>
        <p>Список продуктов</p>
        <?php 
            selectProduct() 
        ?>
    </div>
</body>
</html>