<?php
session_start();
header("Refresh: 2;url=../index.php");
include "connect.php";

$login=$_GET['login'];
$pass=$_GET['pass'];
$mail=$_GET['mail'];
$date=date("m.d.y");

$_SESSION['login']=$login;

$zapros="INSERT INTO `users`(`login`, `pass`, `mail`,`date`,`onSite`,`winInGame`) VALUES ('$login','$pass','$mail','$date','1',0)";
$result=mysqli_query($link,$zapros);
echo("Вы успешно зарегистрировались");

?>