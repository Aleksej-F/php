
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css4.css" type="text/css" />
 
</head>

<div class="container container-img">


    <h1>Исходное изображение</h1>
    <div class="container-gallery">
        <img src="big/<?= $_GET['img']?>" alt="" class="container-gallery__img">
    </div>
    
    <a href="<?= $_SERVER['HTTP_REFERER']?>">назад</a>
</div>