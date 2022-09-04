<?php
session_start();
include "pages/connect.php";
$numPage=(string)$_SERVER['REQUEST_URI'];
$numPage=$numPage[strlen($numPage)-1];
if ($numPage=="p"){
    $numPage=1;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
       ym(87978724, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/87978724" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <meta name='wmail-verification' content='5f71a71ae2353f3c2fee8e7987b64a79' /></meta>
    <meta name="Keywords" content="мемы‹, мем, mems, mem, смех, юиор, хорошее настроение, рофлы, база мемов, membase"></meta>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
    <meta name="description" content="База всех мемов интернета"/></meta>
    <title>MemBase-сборник всех мемов</title>
    <link rel="icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg"></link>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <div class="all">
        <div class="header">
            <a style="text-decoration: none;" href="index.php"><span class="sitename">MemBase)</span></a>
            <div class="UndersitenameDiv">
                <span class="Undersitename">Архив всех мемов</span><br>
                <?php
                if($_SESSION["login"]<>""){
                echo("<span class='Undersitename'>Добро пожаловать, {$_SESSION["login"]}<3</span>");
                }
                ?>
            </div>
        </div>
        <div class="mid">
            <?php
            if($_SESSION['login']<>NULL && $_SESSION['login']<>"RikiSem"){
                echo('
            <div class="btns" style="display: flex;border-bottom:3px solid darkcyan;padding-bottom:5px;">
                <div class="divBtn">
                    <a class="link" href="pages/logout.php"><button class="b">Выйти</button></a>
                    <a class="link" href="pages/addmemPage.php"><button class="b">Загрузить мемчик</button></a>
                    <a class="link" href="pages/game.php"><button class="b">Сыграть</button></a>
                    <a class="link" href="pages/profile.php"><button class="b">Профиль</button></a>
                </div>
            </div>');
            }elseif($_SESSION['login']==NULL){
                echo('
            <div class="btns" style="display: flex;border-bottom:3px solid darkcyan;padding-bottom:5px;">
                <div class="divBtn">
                    <a class="link" href="pages/loginPage.php"><button class="b">Войти</button></a>
                    <a class="link" href="pages/registr.php"><button class="b">Зарегистриоваться</button></a>
                    <a class="link" href="pages/game.php"><button class="b">Сыграть</button></a>
                </div>
            </div>');
            }elseif($_SESSION['login']=="RikiSem"){
                echo('
                <div class="btns" style="display: flex;border-bottom:3px solid darkcyan;padding-bottom:5px;">
                    <div class="divBtn">
                        <a class="link" href="pages/logout.php"><button class="b">Выйти</button></a>
                        <a class="link" href="pages/addmemPage.php"><button class="b">Загрузить мемчик</button></a>
                        <a class="link" href="pages/game.php"><button class="b">Сыграть</button></a>
                        <a class="link" href="pages/AdminPage.php"><button class="b">Админка</button></a>
                        <a class="link" href="pages/profile.php"><button class="b">Профиль</button></a>
                    </div>
                </div>');
            }
            ?>
            <?php
            include "pages/counter.php";
            ?>
        </div>
            <div style="display: flex;">
                <div class="pages">
                    <?php
                    $zapros="SELECT * FROM `mems` WHERE 1";
                    $result1=mysqli_query($link,$zapros);
                    $numRow=mysqli_num_rows($result1);
                    //$numRow=54;
                    $numPages=ceil($numRow/25);
                    for($i=1;$i<>$numPages+1;$i++){
                        if($i)
                        echo("<a class='pagin' href='index.php?{$i}'>{$i}</a>");
                    }
                ?>
                </div>
            </div>
            <div class="content" style="display: flex;">
                <!--<div class="Adds">

                </div>-->
                <div class="memes">
                    <div class="bottom">
                        <?php
                        $zapros="SELECT * FROM `mems` WHERE 1";
                        $result2=mysqli_query($link,$zapros);
                        $numMem=mysqli_num_rows($result2);
                        
                        $zapros="SELECT * FROM `mems` WHERE `id`<=('$numMem'-(('$numPage'-1)*25)) AND `id`>('$numMem'-('$numPage'*25)) ORDER BY `id` DESC";
                        $result2=mysqli_query($link,$zapros)or die(mysqli_error($link));
                        $numRows=mysqli_num_rows($result2);
                        for($i=0;$i<>$numRows;$i++){
                            $mem=mysqli_fetch_assoc($result2);
                        if($mem['name'][0]=="h"&&$mem['name'][1]=="t"&&$mem['name'][2]=="t"&&$mem['name'][3]=="p"&&$mem['name'][4]=="s"){
                            echo("<div style='color:white;background-color:rgba(4, 51, 90, 0.705);height:200px;width:200px;margin-left:20px;margin-right:20px;box-shadow: darkcyan 0px 0px 3px 3px;margin-top:7px;margin-bottom:7px;'>
                            <a href='pages/memPage.php?{$mem['id']}'><img width='200' height='200' src='{$mem['name']}' alt='Упс <3'></a>
                            </div>");
                        }else{
                             echo("<div style='color:white;background-color:rgba(4, 51, 90, 0.705);height:200px;width:200px;margin-left:20px;margin-right:20px;box-shadow: darkcyan 0px 0px 3px 3px;margin-top:7px;margin-bottom:7px;'>
                            <a href='pages/memPage.php?{$mem['id']}'><img width='200' height='200' src='Mems/{$mem['name']}' alt='Упс <3'></a>
                            </div>");
                        }
                           
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <div style="display: flex;">
                <div class="pages" style="margin-top: 10px;">
                    <?php
                    $zapros="SELECT * FROM `mems` WHERE 1";
                    $result=mysqli_query($link,$zapros);
                    $numRow=mysqli_num_rows($result);
                    //$numRow=54;
                    $numPages=ceil($numRow/25);
                    for($i=1;$i<>$numPages+1;$i++){
                        if($i)
                        echo("<a class='pagin' href='index.php?{$i}'>{$i}</a>");
                    }
                ?>
                </div>
            </div>
    </div>
    <a href="https://webmaster.yandex.ru/siteinfo/?site=mem-base.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?mem-base.ru&theme=light&lang=ru"/></a>
</body>
</html>
