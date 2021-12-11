<?php
session_start();
//include "function.php";
include "./config/config.php";
include_once "./controllers/User.php";
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
	<section class="bredcrumb">
			<div class="wrap bredcrumb-wrap">
				<h2 class="bredcrumb-h2">New Arrivals</h2>
				<ul class="bredcrumb-nav">
					<li class="bredcrumb-nav-item"><a href="#" class="bredcrumb-nav-link">Home /</a></li>
					<li class="bredcrumb-nav-item"><a href="#" class="bredcrumb-nav-link">Men /</a></li>
					<li class="bredcrumb-nav-item"><a href="#" class="bredcrumb-nav-link bredcrumb-nav-link-active">new arrivals</a></li>
				</ul>
			</div>
	</section>
	
	<section class="checkout">
		<div class="wrap checkout_wrap">
			<details open>
				<summary class="shopping-cart_z">01.&nbsp;&nbsp;&nbsp;Shipping Adress</summary>
					<div class="checkout_summary_cont">
						<form name="test" method="post" id="formCheckout" >
							<h3 class="shopping-cart_z_4">Check as a guest or register</h3>
							<b class="shopping-cart_z_5">Register with us for future convenience</b>
							<Br><Br>
							
								<div class="checkout_inp_cont">
									<input type="radio" name="reg" value="guest">
									<b class="shopping-cart_z_4 shopping-cart_z_6"> checkout as guest</b>
								</div>
								<div class="checkout_inp_cont">
									<input type="radio" name="reg" value="reg" checked="checked"> 
									<b class="shopping-cart_z_4 shopping-cart_z_6">register</b>
								</div>
							
							<Br>
							<h3 class="shopping-cart_z_4">register and save time!</h3>
							<b class="shopping-cart_z_5">Register with us for future convenience</b><Br><Br>
							<b class="shopping-cart_z_5"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>Fast and easy checkout</b><Br>
							<b class="shopping-cart_z_5"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>Easy access to your order history and status</b><Br>
							<a href="#" id="сontСheckt">
								<div class="shopping-cart_button_5" onclick="сontinueСheckout()">
									<p>Continue</p>
								</div>
							</a>
						</form>
						<form name="test" method="post">
							<p><?=$message?$message:"";?> </p>
							<h3 class="shopping-cart_z_4">Already registed?</h3>
							<b class="shopping-cart_z_5">Please log in below</b><Br><Br>
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6"> EMAIL ADDRESS</b>
								<b class="shopping-cart_z_4 shopping-cart_z_7">*</b>
							</div>
							<input type="email" class="email" placeholder="" required pattern="\S+@[a-z]+.[a-z]+" id="logMail">
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6">PASSWORD</b>
								<b class="shopping-cart_z_7">*</b>
							</div>
							<input class="email" type="password" placeholder required id="logPass">
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_7 shopping-cart_z_8">* Required Fileds</b>
							</div>
							<div class="checkout_inp_forgot">
								<div class="shopping-cart_button_5" onclick="logIn()">
									<p>Log in</p>
								</div>
								<a href="#" class="shopping-cart_z_9"><b >Forgot Password ?</b></a>
							</div>
							<div id="h1"></div>
						</form>
					</div>
			</details>
		</div>
		<?php
		print_r($_SESSION['userRights']);

		if(isset($_SESSION['userRights'])):?>
			<h1>Ваша учетная запись подтверждена!</h1>
		<?php
			endif;
		?>
	</section>
	<? include "./templates/subscribe.php"; ?>
	<? include "./templates/footer.php"; ?>
</body>
</html>
