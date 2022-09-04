<?php
session_start();
header("Location: ../addmemPage.php");
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
include "../connect.php";
$name=$_FILES['mem']['name'];
if($_FILES['mem']['type']<>"image/webp"&&$_FILES['mem']['type']<>"video/mp4" && $_FILES['mem']['type']<>"video/x-msvideo" && $_FILES['mem']['type']<>"image/jpeg" && $_FILES['mem']['type']<>"image/gif" && $_FILES['mem']['type']<>"image/png" && $_FILES['mem']['type']<>""){
    echo("<div style='text-align:center;font-weight: bold;font-size: 30pt;margin-top:150px;color: rgba(4, 51, 90, 0.705);'>
    Вы пытаетесь загрузить не картинку или видео, не надо так(
    </div>");
    header("Refresh: 1;url=../addmemPage.php");
}elseif($_FILES['mem']['type']==""){
    echo("<div style='text-align:center;font-weight: bold;font-size: 30pt;margin-top:150px;color: rgba(4, 51, 90, 0.705);'>
    Вы ничего не загрузили(
    </div>");
    header("Refresh: 1;url=../addmemPage.php");
}
elseif($_FILES['mem']['type']=="image/jpeg" ||
    $_FILES['mem']['type']=="image/png" ||
    $_FILES['mem']['type']=="image/gif" ||
    $_FILES['mem']['type']=="video/x-msvideo" ||
    $_FILES['mem']['type']=="video/mp4"||
    $_FILES['mem']['type']=="image/webp"){
echo($_FILES['mem']['type']);
$date=date("m.d.y");
move_uploaded_file($_FILES["mem"]["tmp_name"],"../../Mems/".$name);
$login=$_SESSION['login'];
$zapros="INSERT INTO `mems`(`name`, `date`,`count`,`author`) VALUES ('$name','$date',0,'$login')";
$result=mysqli_query($link,$zapros);

}

?>