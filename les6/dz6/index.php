<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" type="text/css" />
    <title>Галерея фото</title>
</head>
<body>
    
    <form enctype="multipart/form-data" action="server.php" method="POST" class="container">
        
        <input  name="par1" type="number"  value="<?=$_GET['par1'];?>"/>
        <select name="action" select="<?=$_GET['action'];?>" >
            <option value="0"  <?=$_GET['action']=='0'?'selected':'';?>>+</option>
            <option value="1" <?=$_GET['action']=='1'?'selected':'';?>>-</option>
            <option value="2"  <?=$_GET['action']=='2'?'selected':'';?>>*</option>
            <option value="3"  <?=$_GET['action']=='3'?'selected':'';?>>/</option>
        </select>
        
        <input name="par2" type="number" value="<?=$_GET['par2'];?>" />
        <input type="submit" value="=" />
        <p><?=$_GET['rez']!==''? $_GET['rez']: ''  ?></p>
        <!-- <p><?=$_SESSION['rez']!==''? $_SESSION['rez']: ''  ?></p> -->

    </form>
    <!-- <p><?=$_SESSION['error']!==''? $_SESSION['error']: ''  ?></p> -->
    <p><?=$_GET['error'] ?></p>
</body>
</html>