<?php require"php/function.php"; 

session_start();
if($_SESSION['status'] == 'login') {
	echo "<script>
	function myFunction() {
  document.getElementById('change').innerHTML =  'PROFILE'
  document.getElementById('change').href =  'index-profle.php'
}
	</script>";
}else{
	echo "<script>
	function myFunction() {
  document.getElementById('change').innerHTML =  'LOGIN'
  document.getElementById('change').href =  'index.php'
}
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"> 
	<title>WAVE | HOMEPAGE</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	 <script src="jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body onload ="myFunction()">
	<div class="wrapper">
		<!-- bagian header -->
		<header>
		<section>
		<a href="index-home.php"><img src="asset/img/logo1.png"></a>
		</section>
		<nav>
		<ul>
			<a href="index-home.php">HOME</a>
			<a href="index-produk.php">PRODUCT</a>
			<a href=".php">ABOUT</a>
			<a href="index.php"id="change"></a>	
		</ul>
		</nav>
		</header>
		<!-- bagian header -->

		<!-- bagian swiper -->
		<div class="swiper">
			<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="content-swiper">
					<div class="desc-product-swiper">
						<h2>Asus Rog G15ck-i7659t</h2>
						<p>
						his gaming pc will give you not only the ultimate gaming pleasure but <br> also that desired edge which help you to beat the competition.The<br>features, components,Ram,storage,processor and graphics, all will add<br>to the consistent performance of this system
					</p>
					<br>
					<a href="">MORE</a>
					</div>
					<img src="asset/img/asusrog.png">
				</div>
			</div>
			<div class="swiper-slide">
				<div class="content-swiper">
					<div class="desc-product-swiper">
						<h2>XIAOMI Water Purifier Faucet</h2>
						<p>
						In addition to purifying the air form exposure to industrial pollition<br> or
						motor vhicle fumes that enter form outside, an air purifier can also<br>
						minimize exposure to kitchen or cigarette smoke, kill viruses and
						bacteria,unpleasant odors and harmful gases
					</p>
					<br>
					<a href="">MORE</a>
					</div>
					<img src="asset/img/airxiomi.png">
				</div>
				</div>
				<div class="swiper-slide">
				<div class="content-swiper">
					<div class="desc-product-swiper">
						<h2>XIAOMI Water Purifier Faucet</h2>
						<p>
						In addition to purifying the air form exposure to industrial pollition<br> or
						motor vhicle fumes that enter form outside, an air purifier can also<br>
						minimize exposure to kitchen or cigarette smoke, kill viruses and
						bacteria,unpleasant odors and harmful gases
					</p>
					<br>
					<a href="">MORE</a>
					</div>
					<img src="asset/img/leptopasus.png">
				</div>
				</div>
				<div class="swiper-slide">
				<div class="content-swiper">
					<div class="desc-product-swiper">
						<h2>XIAOMI Water Purifier Faucet</h2>
						<p>
						In addition to purifying the air form exposure to industrial pollition<br> or
						motor vhicle fumes that enter form outside, an air purifier can also<br>
						minimize exposure to kitchen or cigarette smoke, kill viruses and
						bacteria,unpleasant odors and harmful gases
					</p>
					<br>
					<a href="">MORE</a>
					</div>
					<img src="asset/img/dobly.png">
				</div>
				</div>
			</div>

		  <div class="swiper-pagination"></div>

		  <div class="swiper-button-prev"></div>
		  <div class="swiper-button-next"></div>

		  <div class="swiper-scrollbar"></div>
		</div>
		
	<!-- bagian swiper -->

	<!-- bagian rating -->
	<div class="rating">
		<h1 align="center">Why You Choose Us?</h1>
		<center>
		<ul>
			<a href=""><i class="fas fa-thumbs-up"><br><p>QUALITY</p></i></a>
			<a href=""><i class="fas fa-bolt"><br><p>FAST</p></i></a>
			<a href=""><i class="fas fa-truck"><br><p>FREE ONGKIR</p></i></a>
		</ul>
		</center>
	</div>
	<!-- bagian rating -->

	<!-- Best product-->
	<div class="container-best-product">

			<h1 align="center">Out Best product</h1>
			<center>
		<div class="best-product">
		<a href=""><div><img src="asset/img/acer.png"><p>Acer Swift 3 Infinity</p></div></a>
		<a href=""><div><img src="asset/img/samsung.jpg"><p>Samsung Curved Monitor 24hz</p></div></a>
		<a href=""><div><img src="asset/img/asusrog.png"><p>Asus Rog G15ck-i7659t</p></div></a>
		</div>
		<br>
		<br>	
		<a href="index-produk.php">MORE</a>
		</center>
	</div>
	<!-- best product -->

	<!--bagian footer  -->
		<footer>
			<h3 align="center">Copyright &copy; 2021-2022 WaveCompany. All Right Reserved</h3>
		</footer>
	<!-- bagian footer -->
</div>

</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/swiper.js"></script>

</html>