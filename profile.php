<?php
session_start();
include "connect.php";
$login=$_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            echo("<title>MemBase-база всех мемов/Профиль ".$login."</title>");
        ?>
    <meta name="description" content="База всех мемов интернета"/> 
    <link rel="icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="header">
        <a style="text-decoration: none;" href="../index.php"><span class="sitename">MemBase)</span></a>
        <div class="UndersitenameDiv">
            <span class="Undersitename">Архив всех мемов</span>
        </div>
    </div>
    <div class="btns" style="display: flex;">
        <div class="divBtn">
            <a class="link" href="pages/logout.php"><button class="b">Выйти</button></a>
            <a class="link" href="../index.php"><button class="b">Главная</button></a>
        </div>
    </div>
    <div class = "mainProfile">
        <div class = "profilePhoto">
            <?php
            if(file_exists("../pics/avatars/".$login.".jpg") == false){
                echo('<img id = "profilePhoto" src="../pics/avatars/def_ava.png" alt="">');
            }else{
                echo('<img id = "profilePhoto" src="../pics/avatars/'.$login.'.jpg" alt="">');
            }
            ?>
        </div>
        <div class="profileInfo">
<?php
    $zapros = "SELECT * FROM `users` WHERE `login` = '$login'";
    $result=mysqli_query($link,$zapros);
    $profileInfo=mysqli_fetch_assoc($result);
    echo("Ник: " . $profileInfo['login'] ."<br>");
    echo("Дата регистрации: " . $profileInfo['date'] ."<br>");
    echo("E-mail: " . $profileInfo['mail'] ."<br>");
?>
        </div>
    </div>
    <div class="changefoto">
        <form action="ChangeFoto.php" enctype="multipart/form-data" method="post">
            Выберите новую аватарку:<br>
            <p><input type="file" name="avaFoto" id=""></p>
            <p><input type="submit" value="Сохранить"></p>
        </form>
    </div>  
</body>
</html>