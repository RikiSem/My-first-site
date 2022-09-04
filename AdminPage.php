<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
    <link rel="shortcut icon" type="image/svg+xml" href="https://mem-base.ru/favicon.svg">
    <link rel="stylesheet" href="../style.css">
    <meta name="description" content="База всех мемов интернета"/> 
</head>
<body>
    <div class="header">
        <a style="text-decoration: none;" href="../index.php"><span class="sitename">MemBase)</span></a>
        <div class="UndersitenameDiv">
            <span class="Undersitename">Архив всех мемов</span><br>
            <span class="Undersitename">Страница админа</span>
        </div>
    </div>
    <div class="btns" style="display: flex;">
        <div class="divBtn">
            <a class="link" href="../index.php"><button class="b">Главная</button></a>
            <a class="link" href="addManyMemsPage.php"><button class="b">Потоковая загрузка</button></a>
        </div>
    </div>
    <div class="operations">
        <div class="users razdel">
            <p class="Undersitename">Удаление пользователя</p>
            <?php
            $zapros="SELECT * FROM `users` WHERE 1";
            $result=mysqli_query($link,$zapros);
            $numRow=mysqli_num_rows($result);
            echo("<p class='Undersitename'>Всего пользователей: ".$numRow."</p>");
            ?>
            <form action="" class="userForm" method="GET">
                <input type="submit" style="margin-bottom: 5px;font-size: 15pt;margin-left:auto;margin-right:auto;" value="Удалить пользователя"><br>
                <select name="user" class="userList" multiple size="10">
                    <option disabled>id--------ник------------------почта------------------статус------зарегистриован</option>
                    <?php
                    for($i=0;$i<>$numRow;$i++){
                        $text=mysqli_fetch_assoc($result);
                        if($text['onSite']==1){
                            $onSite="В сети";
                        }elseif($text['onSite']==0){
                            $onSite="не в сети";
                        }
                        echo("<option value='{$text['login']}'>{$text['id']}------{$text['login']}------{$text['mail']}------{$onSite}------{$text['date']}</option>");
                    }
                    ?>
                </select>
            </form>
        </div>
        <div class="razdel" style="margin-top:5px;">
            <p class="Undersitename">Просмотры на мемах <a class="link" href = "refreshViews.php"><button class="b">Сбросить просмотры</button></a></p>
            <div class="memStat">
                <div class="headerMemTab">
                    <table class="headerMemTab" border="1">
                        <tr><th class='td1'>ID</th><th class='td1'>Дата</th><th class='td1'>Кол-во просмотров</th></tr>
                    </table>
                </div>
                <div class="mem">
                    <table class="memList" border="1">
                        <?php
                        $zapros="SELECT * FROM `mems` WHERE 1 ORDER BY `id` DESC";
                        $result=mysqli_query($link,$zapros);
                        $numRow=mysqli_num_rows($result);
                        for($i=0;$i<>$numRow;$i++){
                            $text=mysqli_fetch_assoc($result);
                            echo("<tr class='memLi'><td class='td'>{$text['id']}</td><td class='td'><a style='text-decoration:none;color:black;' href='memPage.php?{$text['id']}'>{$text['date']}</a></td><td class='td'>{$text['count']}</td></tr>");
                        }
                        ?>
                    </table>
                </div>
                <div class="headerMemTabBot">
                    <table class="headerMemTabBot" border="1">
                        <?php
                        $zapros="SELECT * FROM `mems` WHERE 1";
                        $result=mysqli_query($link,$zapros);
                        $numRow=mysqli_num_rows($result);
                        $a=0;
                        for($i=0;$i<>$numRow;$i++){
                            $text=mysqli_fetch_assoc($result);
                            $a=$a+$text['count'];
                        }
                        echo("<tr><th class='td1'>Всего просмотров</th><th class='td1'></th><th class='td1'>{$a}</th></tr>");
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>