<?php
session_start();
include "connect.php";
$login=$_SESSION['login'];
$zapros="UPDATE `users` SET `onSite`=0 WHERE `login`='$login'";
$result=mysqli_query($link,$zapros);
$_SESSION['login']=NULL;
header("Location: ../index.php")
?>