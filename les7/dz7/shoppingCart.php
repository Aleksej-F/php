<?php
//include "function.php";
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
		
		
	<section class="shopping-cart">
		<div class="wrap shopping-cart_wrap">
			<div class="shopping-cart_grid">
				<h2>Product Details</h2>
				<p></p>
				<h2>unite Price</h2>
				<h2>Quantity</h2>
				<h2>shipping</h2>
				<h2>Subtota</h2>
				<h2>ACTION</h2>
			</div>
			<div class="shopping-cart_grid_separator"></div>
            
            <?php
			
                $idUser = 1;
                $sql = "SELECT basket.id_product, basket.count, product.description, product.price, product.img, product.title FROM `basket`JOIN `product` ON basket.id_product = product.id WHERE basket.id_user = $idUser;";
                $res = mysqli_query($connect,$sql);
                $total = 0;
                while($reviews = mysqli_fetch_assoc($res)):?>

                <div class="shopping-cart_grid">
                    <img src="img/<?=$reviews['img']?>"  height="115px" alt="">
                    <div class="shopping-cart_grid_2">
                        <h3><?=$reviews['title']?></h3>
                        <div class="shopping-cart_grid_2-1">
                            <p class="shopping-cart_grid_2-1-1">Color:</p>
                            <p class="shopping-cart_grid_2-1-2">Red</p>
                        </div>
                        <div class="shopping-cart_grid_2-1">
                            <p class="shopping-cart_grid_2-1-1">Size:</p>
                            <p class="shopping-cart_grid_2-1-2">Xll</p>
                        </div>
                    </div>
                    <h3 class="shopping-cart_grid_3">$<?=$reviews['price']?></h3>
                    <input class="shopping-cart_grid_3 grid_3_1" 
                            placeholder="2" type="number" required min="0" max="100" 
                            value=<?=$reviews['count']?>
                            onChange="countBasket(<?=$reviews['id_product']?>, value)"
                            
                            >
                    <h3 class="shopping-cart_grid_3">FREE</h3>
                    <h3 class="shopping-cart_grid_3">$<?=$reviews['price']*$reviews['count']?></h3>
                    <i class="fa fa-times-circle cart_rov_col_4" aria-hidden="true" onclick="delProductBasket({idPr:<?=$reviews['id_product']?>})" ></i>
                </div>
                <div class="shopping-cart_grid_separator"></div>
                <?php  $total = $total + $reviews['price'] * $reviews['count'];?> 
			<?php endwhile;?>

			
            <div class="shopping-cart_button">
				<div class="shopping-cart_button_1" onclick="clearBasket()">
					<p>cLEAR SHOPPING CART</p>
				</div>
				<a href="index.php" >
                    <div class="shopping-cart_button_1" >
                        <p>cONTINUE sHOPPING</p>
                    </div>
                </a>
			</div>
			<div class="shopping-cart_form">
				<div class="shopping-cart_form_col">
					<h3 class="shopping-cart_z">Shipping Adress</h3>
					<input class="country" placeholder="Bangladesh" pattern="\S+[А-яа-я]">
					<input class="country" placeholder="State" pattern="\S+[А-яа-я]">
					<input class="country" placeholder="Postcode / Zip" pattern="\S+[А-яа-я]">
					<div class="shopping-cart_button_2" >
						<p>get a quote</p>
					</div>

				</div>
				<div class="shopping-cart_form_col">
					<h3 class="shopping-cart_z">coupon discount</h3>
					<h3 class="shopping-cart_z_1">Enter your coupon code if you have one</h3>
					<input class="country" placeholder="State" pattern="\S+[А-яа-я]">
					<div class="shopping-cart_button_3">
						<p>Apply coupon</p>
					</div>
				</div>
				<div class="shopping-cart_form_col shopping-cart_form_col_3">
					<h3 class="shopping-cart_z_2">Sub total         $<?=$total?></h3>
					<div class="grand_total">
						<h3 class="shopping-cart_z">GRAND TOTAL</h3>
						<h3 class="shopping-cart_z_3">$<?=$total?></h3>
					</div>
					<div class="shopping-cart_col_separator"></div>
					<a href="checkout.php">
						<div class="shopping-cart_button_4">
							<p>proceed to checkout</p>
						</div>
					</a>
				</div>
			</div>
		</div>

	</section>
		
	<? include "./templates/subscribe.php"; ?>
		<? include "./templates/footer.php"; ?>
</body>
</html>