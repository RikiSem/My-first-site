<?php
session_start();

include "connect.php";
$id=(string)$_SERVER['REQUEST_URI'];
$id=substr($id,19,strlen($id));

$zapros="SELECT * FROM `mems` WHERE `id`='$id'";
$result=mysqli_query($link,$zapros);
$counter=mysqli_fetch_assoc($result);
$counter=$counter['count'];
$counter++;

$zapros="UPDATE `mems` SET `count`='$counter' WHERE `id`='$id'";
$result=mysqli_query($link,$zapros);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>MemBase-база всех мемов/
    <?php
    echo($id);
    ?>
    </title>
    <link rel="stylesheet" href="../style.css"></link>
    <link rel="icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg"></link>
    <?php
    echo("<meta name='description' content='Это мем номер {$id}'/>");
    ?>
</head>
<body>
<div class="all">
        <div class="header">
        <a style="text-decoration: none;" href="../../index.php"><span class="sitename">MemBase)</span></a>
        <div>
            <span class="Undersitename">Архив всех мемов</span>
        </div>
        </div>
            <div class="btns" style="display: flex;">
                <div class="divBtn">
                    <a class="link" href="../index.php"><button class="b">Главная</button></a>
                </div>
            </div>
        <div class="pic">
            <?php
            $zapros="SELECT * FROM `mems` WHERE `id`='$id'";
            $result=mysqli_query($link,$zapros);
            $mem=mysqli_fetch_assoc($result);
            if($mem['name'][0]=="h"&&$mem['name'][1]=="t"&&$mem['name'][2]=="t"&&$mem['name'][3]=="p"&&$mem['name'][4]=="s"){
                echo("<img class='img' src='{$mem['name']}'>");
            }else{
                echo("<img class='img' src='../Mems/{$mem['name']}'></img>");
            }
            ?>
        </div>
        <div class="Meminfo">
            <img style='size: 16px 16px ;' src="" alt="">
            <?php
            $zapros="SELECT * FROM `mems` WHERE `id`='$id'";
            $result=mysqli_query($link,$zapros);
            $mem=mysqli_fetch_assoc($result);
            if($mem['name'][0]=="h"&&$mem['name'][1]=="t"&&$mem['name'][2]=="t"&&$mem['name'][3]=="p"&&$mem['name'][4]=="s"){
            echo("<p>Откуда:<a href='{$mem['name']}'>{$mem['name']}</a></p>
            <p>Дата: {$mem['date']}</p>
            <p>Автор: {$mem['author']}</p>
            ");
            }else{
                 echo("<p>Дата: {$mem['date']}</p>
                 <p>Автор: {$mem['author']}  <img style='size: 16px 16px ;' src='../pics/avatars/".$login.".jpg' alt='это аватарка'></p>
                 ");
            }
            ?>
        </div>
        <div class="comments">
            <div class="comEnter">
                <?php
                echo("<form action='addPages/addcomm.php' method='GET'>");
                ?>
                <textarea name="comment" placeholder="Напишите комментарий" cols="70" rows="6"></textarea>
                <?php
                echo("<input type='hidden' name='memId' value='{$id}'></input>");
                ?>
                <input type="submit" class="combtn" value="Отправить"></input>
                </form>
            </div>
            <div class="comshow">
                <?php
                $zapros="SELECT * FROM `comments` WHERE `mem`='$id'";
                $result=mysqli_query($link,$zapros);
                $numrow=mysqli_num_rows($result);
                if($numrow==NULL){
                    echo("
                    <div class='comm'>
                        <p>Комментариев нет</p>
                    </div>
                    ");
                }
                for($i=0;$i<>$numrow;$i++){
                    $text=mysqli_fetch_assoc($result);
                    echo("
                    <div class='comm'>
                        <p style='border-bottom:3px solid darkcyan;'>{$text['author']},{$text['date']}</p>
                        <span>{$text['text']}</span>
                    </div>
                    ");
                }
                
                ?>
            </div>
        </div>
    </div>
</body>
</html>