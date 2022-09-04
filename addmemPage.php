<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemBase-база всех мемов/Загрузка мема</title>
    <link rel="icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg">
    <link rel="stylesheet" href="../style.css">
    <meta name="description" content="База всех мемов интернета"/> 
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
                <a class="link" href="../index.php"><button class="b">Главная</button></a>
            </div>
        </div>
    <div class="top" style="padding-top: 20%;">
        <div class="load">
            <form enctype="multipart/form-data" action="addPages/addmem.php" method="post">
                <p><input type="file" name="mem"></p>
                <p><input type="submit" class="b" value="Отправить"></p>
            </form>
            <span style="text-align:left;">Поддерживающиеся форматы файлов:</span><br>
                <span>*.gif</span><br>
                <span>*.png</span><br>
                <span>*.jpeg</span><br>
                <span>*.mp4</span><br>
                <span>*.webp</span><br>
            <p>или вставь ссылку</p>
            <form action="addPages/addmemURL.php" method="post">
                <p><input style="width:90%;" type="url" name="mem"></p>
                <p><input type="submit" class="b" value="Отправить"></p>
            </form>
        </div>
        
    </div>
    
</body>
</html>