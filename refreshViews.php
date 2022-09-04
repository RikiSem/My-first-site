<?php
header("Location: AdminPage.php");
include "connect.php";
$zapros = "UPDATE `mems` SET `count`= 0 WHERE 1";
$result=mysqli_query($link,$zapros);
?>