<?php
    session_start();

    include "./config/config.php";
    include_once "./controllers/Product.php"; 
   
    $id = (int)($_GET['id']);
   

    $sql="SELECT * FROM `product` WHERE `id`=$id";
    $res = mysqli_query($connect,$sql);
    $data = mysqli_fetch_assoc($res);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Brand shop</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/details.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel = "preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/0c6c22b8c4.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./sc.js"></script>
</head>
<body>
<? include "./templates/header.php"; ?>

<div class="details-product-cont-elem">
    <form method="post" enctype="multipart/form-data">    
        <div class="details-product-cont-elem-heder">
            <input class="product__edit-title" name="title" value="<?=$data['title']?>"/>
        </div>
        <div class="details-product-cont-elem-blok">
            <div class="product-cont-elem">
                        <img src="img/<?=$data['img']?>" alt="" width="260px">
                        <input type="hidden" id="imgProductEdit" value=<?=$data['img']?> />
                        <div class="product-cont-elem-text">
                            
                            $<input class="product-cont-img-p2" id="priceProductEdit" name="price" value="<?=$data['price']?>"/>.00
                        </div>
            </div>
            <div class="product-cont-elem details-col">
                <h2 > Описание </h2>
                <textarea class="product__edit-textarea" id="descriptionProductEdit" name="description"> <?=$data['description']?> </textarea>
            </div>
           

        </div>
        <p><input type="file" name="img" accept="image/jpeg,image/png,image/gif" ></p>
        <?= $message? $message:'<br/>'?>
        <a href="index.php" >
            <p class="product-cont-img-p1"> Назад</p>
        </a>
            <input type="hidden" id="idProductEdit" name="idProduct" value=<?=$data['id']?> />
            <input onclick="" value="Сохранить"  type="submit" name="submit" class="container-b"/>
    </form>
    


</div>


<!-- 
<div class="details-product-cont-elem">
    <div class="details-product-cont-elem-heder">
        
    </div>
  
    <a href="index.php" >
        <p class="product-cont-img-p1"> Назад</p>
    </a>
   
    <form enctype="multipart/form-data">
        <fieldset  class="container">
            <p>Наименование:</p>
            <input value=<?=$data['title']?>/>
            <br/>
            <div class="product-cont-elem">
					<img src="img/<?=$data['img']?>" alt="" >
					
					
            </div>
            
            <p>Описание:</p>
            <textarea id="reviews" class="container-i"><?=$data['description']?></textarea>
            <p>Цена:$</p>
            <input class="product-cont-img-p2"  id="priseProductEdit" value=<?=$data['price']?>/>
            <br/>
            <input type="hidden" id="idProductEdit" value=<?=$data['id']?> class="container-i"/>
            <input onclick="" value="Сохранить"  type="button" class="container-b"/>
        </fieldset>
      
            
      
    </form>
   


</div> -->

<? include "./templates/footer.php"; ?>
</body>
</html>