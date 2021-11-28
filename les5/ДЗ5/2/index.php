
<?php
    include "function.php";
    include "config.php";
    //$sql = "select * from images";
    $sql = "SELECT * FROM images WHERE 1 ORDER BY count DESC";
    $res = mysqli_query($connect,$sql);
?>


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

    <div class="container">
   
    <?php 
    
        while($data = mysqli_fetch_assoc($res)):?>
            <div class='container-blok'>
                <a href='fullImage.php?action=count&img=<?=$data['title']?>&id=<?=$data['id']?>&count=<?=$data['count']?>'><img width='150' src='small/<?=$data['title']?>' alt=''></a>
                <p> <?=$data['count']?> </p>
            </div>
        <?php
            endwhile;
        ?>
        

    </div>

</body>
</html>

