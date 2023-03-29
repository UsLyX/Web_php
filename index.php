<?php
require_once 'connect.php';
session_start();
$nickname = $_SESSION['nickname'];
$background = $_POST['background'];

$conn->query("UPDATE `person` SET `background` = '$background' WHERE `person`.`nickname` = '$nickname'");

$_SESSION['background'] = $conn->query("SELECT `background` FROM `person` WHERE `nickname` = '$nickname'");
$_SESSION['background'] = $_SESSION['background']->fetch_assoc();
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
    <form method="post">
        <input type="text" placeholder="Введите фон" name="background">
        <button>Изменить фон</button>
    </form>
</body>';

?>
</html>