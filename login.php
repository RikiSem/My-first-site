<?php
session_start();
include "../connect.php";
$login=$_GET['login'];
$pass=$_GET['pass'];
$zapros="SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'";
$result=mysqli_query($link,$zapros);
$numRow=mysqli_num_rows($result);
if($numRow==0){
    echo("Неправильный логин или пароль");
    header("Refresh: 1;url=loginPage.php");
}else{
    $zapros="UPDATE `users` SET `onSite`=1 WHERE `login`='$login' AND `pass`='$pass'";
    $result=mysqli_query($link,$zapros);
    $_SESSION['login']=$login;
    header("Refresh: 1;url=../../index.php");
}
?>