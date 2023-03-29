<?php
require_once 'connect.php';

$email = $_POST['email'];
$text = $_POST['text'];

$add = $mysql->query("INSERT INTO `question4` (`email`,`text`) VALUE('$email', '$text')");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="email" placeholder="Введите почту" name="email">
        <textarea style="resize: none; width: 200px;
        height: 100px;" placeholder="Введите текст" name="text"></textarea>
        <button>Отправить</button>
    </form>
</body>
</html>