<?php
session_start();

include "../connect.php";
$author=$_SESSION['login'];
$mem=$_GET['memId'];
$text=$_GET['comment'];
$date=date("m.d.y");

if($text==""){
    header("Location:../memPage.php?{$mem}");
}else{
$zapros="INSERT INTO `comments`(`text`, `mem`, `author`,`date`) VALUES ('$text','$mem','$author','$date')";
$result=mysqli_query($link,$zapros);
if($result==true){
    header("Location:../memPage.php?{$mem}");
    }
}
?>