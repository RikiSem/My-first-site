<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemBase-база всех мемов/Крестики-нолики</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../tic-tac-toe.css">
    <link rel="icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg">
    <meta name="description" content="База всех мемов интернета"/> 
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
        <h1 style="color:rgba(4, 51, 90, 0.705);">Крестики-нолики</h1>
        <h1 style="color:rgba(4, 51, 90, 0.705);" id="rez"></h1>
        <div class="btns">
            <div class="row">
                <button id="1" onclick="btn1()" class="btn"></button>
                <button id="2" onclick="btn2()" class="btn"></button>
                <button id="3" onclick="btn3()" class="btn"></button>
                <button id="4" onclick="btn4()" class="btn"></button>
                <button id="5" onclick="btn5()" class="btn"></button>
                <button id="6" onclick="btn6()" class="btn"></button>
                <button id="7" onclick="btn7()" class="btn"></button>
                <button id="8" onclick="btn8()" class="btn"></button>
                <button id="9" onclick="btn9()" class="btn"></button>
            </div>
        </div>
    </div>
    <script src="../tic-tac-toe.js"></script>
</body>
</html>