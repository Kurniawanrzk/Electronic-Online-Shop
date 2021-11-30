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
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/style-profile.css">
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

		<!-- bagian main -->

		<div class="main">

			<div class="sub-main">	
					<p>USERNAME = <?php echo $_SESSION['username'] ?></p>
					<p>EMAIL = <?php ?></p>
					<a href="logout.php">LOGOUT</a>
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