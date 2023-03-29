<?php
session_start();
require_once 'connect.php';

$login = $_POST['loginn'];
$password = md5($_POST['passwordd'].'rerbv346');


$result = $conn->query("SELECT * FROM `person` WHERE `nickname` = '$login' AND `password` = '$password'");


$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Неа";
    exit();
}

$_SESSION['nickname'] = $user['nickname'];

header('Location: /web_php/index.php');