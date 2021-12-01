<?php
include "config.php";
$id = $_GET['id'];
$img = $_GET['img'];
print_r($id);

$sql="SELECT * FROM `product` WHERE `id` =$id";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);
//print_r($data) ;
$sql="SELECT `title` FROM `reviews` WHERE `id_product`=$id";
$res = mysqli_query($connect,$sql);



?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/details.css">
<div class="details-product-cont-elem">
    <div class="details-product-cont-elem-heder">
        <h1 ><?=$data['title']?></h1>
    </div>
    <div class="details-product-cont-elem-blok">
        <div class="product-cont-elem">
					<img src="img/<?=$data['img']?>" alt="" >
					<div class="product-cont-elem-img">
						<a href="#" class="product-cont-elem-img-1">
							<img src="img/forma_1_copy_1287.png" alt="">
							<p>Add to Cart</p>
						</a>
					</div>
					<div class="product-cont-elem-text">
						
						<p class="product-cont-img-p2">$<?=$data['price']?>.00</p>
					</div>
        </div>
        <div class="product-cont-elem details-col">
            <h2 > Описание</h2>
            <p class="details-p1" align="justify"> <?=$data['description']?> </p>
        </div>
    </div>
    <a href="index.php" >
        <p class="product-cont-img-p1"> Назад</p>
    </a>
    <a href="index.php" >
        <p class="product-cont-img-p1"> </p>
    </a>
    
    <form enctype="multipart/form-data" action="server.php" method="POST" >
        <fieldset  class="container">
            <textarea name="reviews" ></textarea>
            <input type="hidden" name="id_product" value=<?=$data['id']?> >
        </fieldset>
        <fieldset class="container">  
            <input type="submit" value="отправить" name="action"/>
            
        </fieldset>
    </form>
    <div>
        <?php
        while($reviews = mysqli_fetch_assoc($res)):?>
           		<div class="">
                   <?=$count+=1?>
                   <?=$reviews['title']?>

				</div>
		<?php endwhile;?>
    </div>


</div>

