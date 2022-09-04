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
    <title>Загрузка мема</title>
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
                <a class="link" href="AdminPage.php"><button class="b">Назад</button></a>
            </div>
        </div>
    <div class="top" style="padding-top: 20%;">
        <div class="load">
            <form enctype="multipart/form-data" action="addPages/addManyMem.php" method="post">
                <p><input type="file" name="mem[]" multiple></p>
                <p><input type="submit" class="b" value="Отправить"></p>
            </form>
        </div>
        
    </div>
    
</body>
</html>