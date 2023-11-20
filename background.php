<?php
require_once 'connect.php';
session_start();
$background = $_POST['background'];
$nickname = $_SESSION['nickname'];

$conn->query("UPDATE `person` SET `background` = '$background' WHERE `person`.`nickname` = '$nickname'");

$_SESSION['background'] = $conn->query("SELECT `background` FROM `person` WHERE `nickname` = '$nickname'");
$_SESSION['background'] = $_SESSION['background']->fetch_assoc();
print_r($_SESSION['background']);

$conn->close();
header('Location: /web_php/index.php');
?>

