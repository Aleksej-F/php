
<link rel="stylesheet" href="css.css" type="text/css" />

<div class="container container-img">


    <h1>Исходное изображение</h1>
    <div class="container-gallery" >
        <img src="big/<?= $_GET['img']?>" alt="" class="container-gallery__img">
    </div>
    
    <a href="<?= $_SERVER['HTTP_REFERER']?>">назад</a>
</div>