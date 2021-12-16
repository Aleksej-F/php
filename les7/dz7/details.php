<?php
    session_start();
    include "./config/config.php";
    
    
    $id = (int)($_GET['id']);
    $img = $_GET['img'];

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
    <div class="details-product-cont-elem-heder">
        <h1 ><?=$data['title']?></h1>
    </div>
    <div class="details-product-cont-elem-blok">
        <div class="product-cont-elem">
					<img src="img/<?=$data['img']?>" alt="" >
					<div class="product-cont-elem-img">
						<div  class="product-cont-elem-img-1" onclick="basket(<?=$data['id']?>)" >
							<img src="img/forma_1_copy_1287.png" alt="">
							<p>Add to Cart</p>
						</div>
					</div>
					<div class="product-cont-elem-text">
						
						<p class="product-cont-img-p2">$<?=$data['price']?>.00</p>
					</div>
        </div>
        <div class="product-cont-elem details-col">
            <h2 > Описание </h2>
            <p class="details-p1" align="justify"> <?=$data['description']?> </p>
        </div>
    </div>
    <a href="index.php" >
        <p class="product-cont-img-p1"> Назад</p>
    </a>
   
    <form enctype="multipart/form-data">
        <fieldset  class="container">
            <p>Оставить отзыв</p>
            <textarea id="reviews" class="container-i"></textarea>
            <input type="hidden" id="idProduct" value=<?=$data['id']?> class="container-i"/>
            <input onclick="send()" value="отправить"  type="button" class="container-b"/>
        </fieldset>
        <?php
        if($_GET['ses'] ):?>
            <h1>Отзывы могут оставлять только авторизованные пользователи!</h1>
            <a href="checkout.php"><div class="cart_rov_button">Checkout</div></a>

        <?php
        endif;
        ?>
            
        </fieldset>
    </form>
    <div>
        <p>Отзывы:</p>
        <fieldset class="container">  
            <?php
             $sql="SELECT `title` FROM `reviews` WHERE `id_product`=$id";
             $res = mysqli_query($connect,$sql);
            while($reviews = mysqli_fetch_assoc($res)):?>
                    <div class="">
                    <?=$count+=1?>
                    <?=$reviews['title']?>

                    </div>
            <?php endwhile;?> 
        </fieldset>
       
    </div>


</div>

<? include "./templates/footer.php"; ?>
</body>
</html>