<!-- Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь 
видит все картинки в уменьшенном виде и форму для загрузки нового изображения. 
При клике на фотографию она должна открыться в браузере в новой вкладке. 
Размер картинок можно ограничивать с помощью свойства width. 
При загрузке изображения необходимо делать проверку на тип и размер файла. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" type="text/css" />
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
        $files = scandir("images");
        //print_r($files);
        for($i=2;$i < count($files);$i++){?>
            <div class="container-blok">
                <a href="fullImage.php?img=<?= $files[$i]?>"><img width="150" src="images/<?= $files[$i]?>" alt=""></a>
            </div>
        <?php
        }
        ?>
</div>
</body>
</html>

