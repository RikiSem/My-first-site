<?php
session_start();
header("Location:../AdminPage.php");
include "../connect.php";
$count=count($_FILES['mem']['name']);
for($i=0;$i<>$count;$i++){
    $name=$_FILES["mem"]["name"][$i];
    $date=date("m.d.y");
    move_uploaded_file($_FILES["mem"]["tmp_name"][$i],"../../Mems/".$name);
    $login=$_SESSION['login'];
    $zapros="INSERT INTO `mems`(`name`, `date`,`count`,`author`) VALUES ('$name','$date',0,'$login')";
    $result=mysqli_query($link,$zapros);
}
?>