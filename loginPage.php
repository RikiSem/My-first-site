<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemBase-база всех мемов/Вход</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg">
    <meta name="description" content="База всех мемов интернета"/> 
</head>
</head>
<body>
    <div class="all">
        <div class="header">
        <a style="text-decoration: none;" href="../index.php"><span class="sitename">MemBase)</span></a>
        <div>
            <span class="Undersitename">Архив всех мемов</span>
        </div>
        </div>
        <div class="divBtn">
                <a class="link" href="../index.php"><button class="b">Главная</button></a>
        </div>
        <div class="mid" style="text-align:center;margin-top:100px;">
            <form action="addPages/login.php" method="GET">
                <p>Логин</p>
                <input type="text" name="login" id="">
                <p>Пароль</p>
                <input type="password" name="pass" id="">
                <p><input type="submit" class="b" value="Войти"></p>
            </form>
        </div>
    </div>
</body>
</html>