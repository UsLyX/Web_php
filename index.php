<?php
require_once 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<?php

echo '
<body style="background-color:'.$_SESSION['background']['background'].';">
    <h1>Личный кабинет</h1>
    <p>Никнейм:'.$_SESSION['nickname'].'</p>
    <form method="post" action="background.php">
        <input type="text" placeholder="Введите фон" name="background">
        <button>Изменить фон</button>
    </form>
    <form method="post" action="nickname.php">
        <input type="text" placeholder="Введите никнейм" name="nickname">
        <button>Изменить ник</button>
    </form>
</body>';

?>
</html>