<?php
//include "function.php";
session_start();
include "./config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Brand shop</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel = "preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/0c6c22b8c4.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./sc.js"></script>
</head>

<body>
		
	<? include "./templates/header.php"; ?>
		
		<section class="product">
			<h2 class="product-p1">Fetured Items</h2>
			<p class="product-p2">Shop for items based on what we featured in this week</p>
			<div class="product-cont">
			
			
			
			<?php
			
			$sql = "select * from product";
			
			$res = mysqli_query($connect,$sql);
			
			
			
			while($data = mysqli_fetch_assoc($res)):?>
           		<div class="product-cont-elem">
					<img src="img/<?=$data['img']?>" alt="">
					<div class="product-cont-elem-img">
						<div class="product-cont-elem-img-1" onclick="basket(<?=$data['id']?>)">
							<img src="img/forma_1_copy_1287.png" alt="">
							<p>Add to Cart</p>
						</div>
					</div>
					<div class="product-cont-elem-text">
						<a href="details.php?action=count&img=<?=$data['img']?>&id=<?=$data['id']?>" class="product-cont-elem-text-a">
							<p class="product-cont-img-p1"><?=$data['title']?></p>
						</a>
						<p class="product-cont-img-p2">$<?=$data['price']?>.00</p>
						
					</div>
				</div>
			<?php endwhile;?>
			
			
			
			
					<a href="#" class="button">
							Browse All Product
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</a>
				
			</div>
		</section>
		<section class="feature">
			<div class="wrap">
				<div class="feature-left">
					
					<div class="text">
						<div class="text2-2">
							<h2 class="text2">30% </h2> 
							<p class="text3"> OFFER</p>
						</div>
						<p class="text1">FOR WOMEN</p>
 					</div>
				</div>
				<div class="feature-right">
					<div class="feature-right-elem">
						<img src="img/forma_1_1322.png" alt="">
						<div class="feature-right-elem-text">
							<p class="feature-right-elem-text-1">Free Delivery</p>
							<p class="feature-right-elem-text-2">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
						</div>
					</div>
					<div class="feature-right-elem">
						<img src="img/forma_1_1340.png" alt="">
						<div class="feature-right-elem-text">
							<p class="feature-right-elem-text-1">Sales & discounts</p>
							<p class="feature-right-elem-text-2">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
						</div>
					</div>
					<div class="feature-right-elem">
						<img src="img/forma_1_1341.png" alt="">
						<div class="feature-right-elem-text">
							<p class="feature-right-elem-text-1">Quality assurance</p>
							<p class="feature-right-elem-text-2">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<? include "./templates/subscribe.php"; ?>
		<? include "./templates/footer.php"; ?>
</body>
</html>
