<?php

require_once 'connect.php';
session_start();

$currentNickname = $_SESSION['nickname'];

$nick = $_POST["nickname"];
echo $nick;

$conn->query("UPDATE `person` SET `nickname` = '$nick' WHERE `person`.`nickname` = '$currentNickname'");

$_SESSION['nickname'] = $nick;
header('Location: index.php');

?>