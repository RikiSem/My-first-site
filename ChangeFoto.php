<?php
session_start();
header("location: profile.php");
include "connect.php";

$nameFoto = $_FILES["avaFoto"]["name"];
$newNameFoto = $_SESSION['login'].".jpg";
move_uploaded_file($_FILES["avaFoto"]["tmp_name"],"../pics/avatars/".$newNameFoto);
?>