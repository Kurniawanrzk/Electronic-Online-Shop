<?php require"php/function.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="asset/style-login.css">
	<title></title>
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
			<a href="index-login.php">LOG-IN</a>
		</ul>
		</nav>
		</header>
		<!-- bagian header -->
		<div class="login">
			<form method="post">
					<label>Username</label>
					<br>
					<input type="text" name="username" required/>
					<br>
					<label>Password</label>
					<br>
					<input type="password" name="password" maxlength="8" required/>
					<br>
					<br>
					<center><input type="submit" name="login" value="LOGIN"></center>
					<br>
					<center><a href="index-register.php">Created Account? |</a><a href=""> Forget Password?</a></center>
			</form>
		</div>
		<!--bagian footer  -->
		<footer>
			<h3 align="center">Copyright &copy; 2021-2022 WaveCompany. All Right Reserved</h3>
		</footer>
	<!-- bagian footer -->
</div>
</body>
</html>