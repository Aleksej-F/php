<?php
//include "function.php";
include "config.php";
$sql = "select * from product";
//$sql = "SELECT * FROM images WHERE 1 ORDER BY count DESC";
$res = mysqli_query($connect,$sql);
//print_r($res);
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
</head>

<body>
		<header class="header">
			<div class="wrap header-wrap">
				<a href="index.html" class="logo">
					<img src="img/group_2_18.png" alt="" class="img-logo">
					<p class="text-logo">BRAN</p>
					<p class="text-logo text-logo-D">D</p>
				</a>
				<div class="search">
					<div class="browse">
						<h2 class="search-text">Browse</h2>
						<i class="fa fa-caret-down" aria-hidden="true"></i>
						<div class="drop_down">
							<h4 class="drop_down_nav">Women</h4>
							<div class="drop_down_separator"></div>
							<ul class="drop_down_nav">
								<li><a href="" class="drop_down_link">Dresses</a></li>
								<li><a href="" class="drop_down_link">Tops</a></li>
								<li><a href="" class="drop_down_link">Sweaters/Knits</a></li>
								<li><a href="" class="drop_down_link">Jackets/Coats</a></li>
								<li><a href="" class="drop_down_link">Blazers</a></li>
								<li><a href="" class="drop_down_link">Denim</a></li>
								<li><a href="" class="drop_down_link">Leggings/Pants</a></li>
								<li><a href="" class="drop_down_link">Skirts/Shorts</a></li>
								<li><a href="" class="drop_down_link">Accessories </a></li>
							</ul>
							<h4 class="drop_down_nav">men</h4>
							<div class="drop_down_separator"></div>
							<ul class="drop_down_nav">
								<li><a href="" class="drop_down_link">Bags/Purses</a></li>
								<li><a href="" class="drop_down_link">Swimwear/Underwear</a></li>
								<li><a href="" class="drop_down_link">Nightwear</a></li>
								<li><a href="" class="drop_down_link">Shoes</a></li>
								<li><a href="" class="drop_down_link">Beauty</a></li>
							</ul>
						</div>
					</div>
					<form class="for-item">
						<input class="search-field" type="text" required placeholder="Search for Item...">
						<button class="vert" type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
				</div>
				<div class="account">
					<a href="shopping-cart.html" >
						<img src="img/forma_1_1113.png" class="account_a" alt="">
					</a>
					<div class="my-acount">
						<h2 class="accout-text">My Account</h2>
						<i class="fa fa-caret-down" aria-hidden="true"></i>
					</div>
					<div class="cart">
						<div class="cart_rov">
							<img src="img/rectangle_24_1821.jpg" class="cart_rov_img" alt="">
							<div class="cart_rov_col">
								<p class="cart_rov_col_1">Rebox Zane</p>
								<p class="cart_rov_col_2">
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star-half-o " aria-hidden="true"></i>
								</p>
								<p class="cart_rov_col_3 ">1&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;$250</p>
							</div>
							<i class="fa fa-times-circle cart_rov_col_4" aria-hidden="true"></i>
						</div>
						<div class="cart_rov_separator"></div>
						<div class="cart_rov">
							<img src="img/rectangle_24_1830.jpg" class="cart_rov_img" alt="">
							<div class="cart_rov_col">
								<p class="cart_rov_col_1">Rebox Zane</p>
								<p class="cart_rov_col_2">
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star " aria-hidden="true"></i>
									<i class="fa fa-star-half-o " aria-hidden="true"></i>
								</p>
								<p class="cart_rov_col_3 ">1&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;$250</p>
							</div>
							<i class="fa fa-times-circle cart_rov_col_4" aria-hidden="true"></i>
						</div>
						<div class="cart_rov_separator"></div>
						<div class="cart_rov_2">
							<p class="cart_rov_col_1 h16">TOTAL</p>
							<p class="cart_rov_col_1 h16">$500.00</p>
						</div>
						<a href="checkout.html"><div class="cart_rov_button">Checkout</div></a>
						<a href="shopping-cart.html"><div class="cart_rov_button">Go to cart</div></a>
					</div>
				</div>
			</div>
		</header>
		
		
		<section class="product">
			<h2 class="product-p1">Fetured Items</h2>
			<p class="product-p2">Shop for items based on what we featured in this week</p>
			<div class="product-cont">
			<?php	
			while($data = mysqli_fetch_assoc($res)):?>
           		<div class="product-cont-elem">
					<img src="img/<?=$data['img']?>" alt="">
					<div class="product-cont-elem-img">
						<a href="#" class="product-cont-elem-img-1">
							<img src="img/forma_1_copy_1287.png" alt="">
							<p>Add to Cart</p>
						</a>
					</div>
					<div class="product-cont-elem-text">
						<a href="details.php?action=count&img=<?=$data['img']?>&id=<?=$data['id']?>" class="product-cont-elem-text-a">
							<p class="product-cont-img-p1"><?=$data['title']?></p>
						</a>
						<p class="product-cont-img-p2">$<?=$data['price']?>.00</p>
						
					</div>
				</div>
			<?php endwhile;?>
			
			
			
			
					<a href="product.html" class="button">
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
		<section class="subscribe">
				<div class="wrap wrap">
					<div class="subscribe-1">
						<div class="subscribe-1-1">
							<img src="img/ellipse_3_2206.png" alt="">
						</div>
						<div class="subscribe-1-2">
							<h2 class="subscribe-1-2-p1">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, 
							a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”</h2>
							<p class="subscribe-1-2-p2">Bin Burhan</p>
							<p class="subscribe-1-2-p3">Dhaka, Bd</p>
							<div class="subscribe-1-2-slaid">
								<div class="subscribe-1-2-slaid-elem"></div>
								<div class="subscribe-1-2-slaid-elem active"></div>
								<div class="subscribe-1-2-slaid-elem"></div>
							</div>
						</div>
					</div>
					<div class="subscribe-2"></div>
					<div class="subscribe-3">
						<div class="subscribe-3-1">
							<p class="subscribe-3-p1">Subscribe</p>
							<p class="subscribe-3-p2">FOR OUR NEWLETTER AND PROMOTION</p>
							

							<form class="subscribe-3-cont">
								<input id="email" class="subscribe-3-cont-1" type="email" required pattern="\S+@[a-z]+.[a-z]+" placeholder="Enter Your Email">
								<button class="subscribe-3-cont-2" type="submit">
									Subscribe
								</button>
							</form>



						</div>
					</div>
				</div>
		</section>
		<footer>
			<div class="wrap wrap-footer">
				<div class="footer-1">
					<a href="index.html" class="logo">
							<img src="img/group_2_18.png" alt="" class="img-logo">
							<p class="text-logo">BRAN</p>
							<p class="text-logo text-logo-D">D</p>
					</a>
					<p class="footer-1-p"> Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships. <br><br>
					Efficiently plagiarize 24/365 action items and focused infomediaries.
					Distinctively seize superior initiatives for wireless technologies. Dynamically optimize
					</p>
					
				</div>
				<div class="footer-2">
					<p class="footer-234-p">COMPANY</p>
					<ul class="footer-nav">
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Home</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Shop</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">About</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">How It Works</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Contact</a></li>
					</ul>
				</div>
				<div class="footer-3">
					<p class="footer-234-p">INFORMATION</p>
					<ul class="footer-nav">
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Tearms & Condition</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Privacy Policy</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">How to Buy</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">How to Sell</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Promotion</a></li>
					</ul>
				</div>
				<div class="footer-4">
					<p class="footer-234-p">SHOP CATEGORY</p>
					<ul class="footer-nav">
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Men</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Women</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Child</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Apparel</a></li>
						<li class="footer-nav-item"><a href="#" class="footer-nav-link">Brows All</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-footer">
				<div class="wrap wrap-footer-footer">
					<div class="footer-footer-1">
						© 2021  Brand  All Rights Reserved.
					</div>
					<div class="footer-footer-2">
						<a href="">
						<div class="rectangle">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
						</a>
						<a href="">
						<div class="rectangle">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</div>
						</a>
						<a href="">
						<div class="rectangle">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</div>
						</a>
						<a href="">
						<div class="rectangle">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</div>
						</a>
						<a href="">
						<div class="rectangle">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</div>
						</a>
					</div>
				</div>
			</div>
		</footer>
</body>
</html>
