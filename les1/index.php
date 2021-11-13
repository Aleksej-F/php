<h1>Заголовок</h1>
<?php
    
    /*echo "<h2>Hello world! Сегодня ".date("d.m.Y")."</h2>";
    echo "<h2>Hello world! Сегодня ".date("d.m.Y")."</h2>";*/

    $a = 7;
    $b = 5;
    echo "\$a= $a  ________  \$b= $b<hr>";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    
    echo "\$a= $a  ________  \$b= $b";
?>


<p>Номер дня недели <?= date("w")?></p><hr>


