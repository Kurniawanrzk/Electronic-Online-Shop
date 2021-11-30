<?php 
error_reporting(0);
$cnn = mysqli_connect('localhost','root','','wavedb');

if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$epassword = password_hash($password, PASSWORD_DEFAULT);

	$insert = mysqli_query($cnn,"INSERT into user(username,email,password) VALUES('$username','$email','$epassword')");
	if ($insert) {
		header('location:../projek/index.php');
	}

}

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($cnn,"SELECT * from user where username='$username'");
	$pw = mysqli_fetch_array($login);
	$newpass = $pw['password'];
	$cek = mysqli_num_rows($login);

	if ($cek>0) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] ='login';
		if (password_verify($password,$newpass)){
			header('location:../projek/index-home.php');
		}else{
			session_start();
			$_SESSION['status'] ='unlogin';
		}
	}
}	

 ?>