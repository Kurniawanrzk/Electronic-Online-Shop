<?php 	require 'php/function.php'; 

session_start();
if ($_SESSION['status'] != 'login') {
	header('location:index-home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/style-profile.css">
</head>
<body>
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
			<a href=""><?php echo $_SESSION['username'];?></a>
		</ul>
		</nav>
		</header>
		<!-- bagian header -->

		<!-- bagian main -->

		<div class="main">

			<div class="sub-main">	
					<a href="logout.php">logout</a>
			</div>

		</div>

		<!-- bagian main -->

		<!--bagian footer  -->
		<footer>
			<h3 align="center">Copyright &copy; 2021-2022 WaveCompany. All Right Reserved</h3>
		</footer>
	<!-- bagian footer -->
</div>
</body>
</html>