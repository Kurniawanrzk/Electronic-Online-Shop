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
	<link rel="stylesheet" type="text/css" href="asset/style-product.css">
	<title>	</title>
</head>
<body onload="myFunction()">
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
			<a href="index-about.php">ABOUT</a>
			<a href="index.php" id="change"></a>	
				</ul>
		</nav>
		</header>
		<!-- bagian header -->

		<!-- bagian product -->
		<div class="product-container">	
			<center>	
				<div class="product">	
				<a href=""><div><img src="asset/img/acer.png"><p>Acer Swift 3 Infinity</p></div></a>
				<a href=""><div><img src="asset/img/samsung.jpg"><p>Samsung Curved Monitor 24hz</p></div></a>
				<a href=""><div><img src="asset/img/asusrog.png"><p>Asus Rog G15ck-i7659t</p></div></a>
				<a href=""><div><img src="asset/img/aclg.jpg"><p>LG AC T19EV4</p></div></a>
				<a href=""><div><img src="asset/img/airxiomi.png"><p>XIAOMI Water Purifier Faucet</p></div></a>
				<a href=""><div><img src="asset/img/dobly.png"><p>KEF Q50A Dolby Atmos</p></div></a>
				</div>
			</center>
		</div>
		<!-- bagian product -->

		<!--bagian footer  -->
		<footer>
			<h3 align="center">Copyright &copy; 2021-2022 WaveCompany. All Right Reserved</h3>
		</footer>
	<!-- bagian footer -->
	</div>

</body>
</html>