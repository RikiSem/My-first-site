<?php
session_start();
header("Location: ../addmemPage.php");
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Упс</title>
    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">
</head>
<body>
    
</body>
</html>
<?php
$name=$_POST['mem'];
$date=date("m.d.y");
$login=$_SESSION['login'];
$zapros="INSERT INTO `mems`(`name`, `date`,`count`,`author`) VALUES ('$name','$date',0,'$login')";
$result=mysqli_query($link,$zapros);

?>