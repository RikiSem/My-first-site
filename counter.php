<?php
session_start();
?>
<?php
include "connect.php";
$zapros="SELECT * FROM `mems` WHERE 1";

$result=mysqli_query($link,$zapros) or die(mysqli_error($link));
$numRow=mysqli_num_rows($result);
?>
<p>
<div class="counter">
    <span>
        <?php
        echo($numRow);
        ?>
    </span>
</div>
</p>