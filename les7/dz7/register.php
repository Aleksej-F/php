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
		<?
        if (isset($_SESSION['userId']) ) {?>
            <h3 class="shopping-cart_z_4">You are already logged in</h3><Br><Br>
			<? } else { ?>
			<details open> 
				<summary class="shopping-cart_z">Register with us for future convenience</summary>
					<div class="checkout_summary_cont">
						
						<form name="register" method="post"  enctype="multipart/form-data">
							<h3 class="shopping-cart_z_4">Please fill in the fields below</h3><Br><Br>
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6">NAME</b>
								<b class="shopping-cart_z_7">*</b>
							</div>
							<input class="email" name="name" type="text" placeholder="" required value=<?=$_POST['name']?$_POST['name']:"";?>>
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6">SURNAME</b>
								<b class="shopping-cart_z_7">*</b>
							</div>
							<input class="email" name="surname" type="text" placeholder="" required value=<?=$_POST['surname']?$_POST['surname']:"";?>>
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6">TELEPHONE</b>
								<b class="shopping-cart_z_7">*</b>
							</div>
							<input class="email" name="phone" type="" placeholder="" required value=<?=$_POST['phone']?$_POST['phone']:"";?>>
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6"> EMAIL ADDRESS</b>
								<b class="shopping-cart_z_7">*</b>
							</div>
							<div class="checkout_inp_cont_help">
								<input type="email" name="mail" class="email" placeholder="" required pattern="\S+@[a-z]+.[a-z]+" value=<?=$_POST['mail']?$_POST['mail']:"";?>>
								<div class="checkout_inp_cont_help_modal">
									<p><?=$message?$message:"";?> </p>
									</div>
							</div>
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_4 shopping-cart_z_6">PASSWORD</b>
								<b class="shopping-cart_z_7">*</b>
							</div>
							<input class="email" name="pass" type="password" placeholder="" required value=<?=$_POST['pass']?$_POST['pass']:"";?>>
							
							<div class="checkout_inp_cont">
								<b class="shopping-cart_z_7 shopping-cart_z_8">* Required Fileds</b>
							</div>
							<div class="checkout_inp_forgot">
								<input class="shopping-cart_button_5" type="submit" name="register" value="Register"/>
							</div>
							
						</form>

					</div>
			</details>
		<? } ?>
		</div>

	</section>
	<? include "./templates/subscribe.php"; ?>
	<? include "./templates/footer.php"; ?>
</body>
</html>
