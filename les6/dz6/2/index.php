<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" type="text/css" />
    <title>Калькулятор</title>
</head>
<body>
    
    <form enctype="multipart/form-data" action="server.php" method="POST" >
        <fieldset  class="container">
            <input  name="par1" type="number"  value="<?=$_GET['par1'];?>"/>
            <p><?=$_GET['action'];?></p>
            <input name="par2" type="number" value="<?=$_GET['par2'];?>" />
            <p>=</p>
            <p><?=$_GET['rez']!==''? $_GET['rez']: ''  ?></p>
        </fieldset>
        <fieldset class="container">  
            <input type="submit" value="-" name="action"/>
            <input type="submit" value="+" name="action"/>
            <input type="submit" value="*" name="action"/>
            <input type="submit" value="/" name="action"/>
        </fieldset>
    </form>
   
    <p><?=$_GET['error'] ?></p>

</body>
</html>