<?php

require_once('connect.php');

$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$password = md5($password.'rerbv346');

$conn->query("INSERT INTO `person`(`nickname`, `password`) VALUE ('$login', '$password')");

$conn->close();

header('Location: /web_php/auth.html');

?>