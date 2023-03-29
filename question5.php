<?php

    require_once 'connect.php';

    $title = $_POST['title'];
    $author = $_POST['author'];
    $coAuthor1 = $_POST['co-author1'];
    $coAuthor2 = $_POST['co-author2'];
    $coAuthor3 = $_POST['co-author3'];

    $add = $mysql->query("INSERT INTO `books` (`name_book`,`author`,`co-author1`,`co-author2`,`co-author3`) 
    VALUE('$title', '$author', '$coAuthor1', '$coAuthor2', '$coAuthor3')");

    function selectBooks(){
        require 'connect.php';

        $books = $mysql->query("SELECT * FROM `books` WHERE `co-author1` != '' AND `co-author2` != '' AND `co-author3` != ''");

        $books = $books->fetch_all();
        foreach ($books as $book){

            echo 
            '
            <div class="book">
                <p>Название книги: '.$book[1].'</p>
                <p>Автор: '.$book[2].'</p>
                <p>Соавтор1: '.$book[3].'</p>
                <p>Соавтор2: '.$book[4].'</p>
                <p>Соавтор3: '.$book[5].'</p>
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
    <link rel="stylesheet" href="question5.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="Название книги" name="title">
        <input type="text" placeholder="Автор" name="author">
        <input type="text" placeholder="Соавтор 1" name="co-author1">
        <input type="text" placeholder="Соавтор 2" name="co-author2">
        <input type="text" placeholder="Соавтор 3" name="co-author3">
        <button>Отправить</button>
    </form>
    <?php selectBooks() ?>
</body>
</html>