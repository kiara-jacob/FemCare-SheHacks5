<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign Up Page</title>
	<link rel="stylesheet" href="style.css" />
	<script src="https://kit.fontawesome.com/a528595bc4.js" crossorigin="anonymous"></script>
</head>

<body>

	<style type="text/css">
		#text {

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button {

			display: flex;
			justify-content: center;
			align-items: center;
			text-decoration: none;
			padding: 10px 20px;
			border: none;
			outline: none;
			border-radius: 4px;
			background: #833ab4;
			background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			color: #fff;
			transition: all 0.3s ease;
		}

		.main__btn a {
			position: relative;
			z-index: 2;
			color: #fff;
			text-decoration: none;
		}

		#box {

			background-color: black;
			margin: 0 auto;
			max-width: 750px;
			padding: 20px;
		}
	</style>
	<!-- Navbar Section -->
	<nav class="navbar">
		<div class="navbar__container">
			<a href="index.php" id="navbar__logo">FemCare</a>
			<div class="navbar__toggle" id="mobile-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
			<ul class="navbar__menu">
				<li class="navbar__item">
					<a href="index.php" class="navbar__links" id="home-page"> Back to Home</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="hero" style="height: 100%;">
		<div id="box">

			<form method="post">
				<div style="font-size: 20px;margin: 10px;color: white; text-align: center;">Sign Up Page</div>

				<input placeholder="User Name" id="text" type="text" name="user_name"><br><br>
				<input placeholder="Enter password" id="text" type="password" name="password"><br><br>

				<input id="button" type="submit" value="Login"><br><br>

				<a style="font-size: 15px;margin: 10px;color: white; text-align: center;" href="login.php"> Already a part of our community? Login Here</a>
			</form>
		</div>
	</div>
	<div class="footer__container">
		<div class="footer__links">
			<section class="social__media">
				<div class="social__media--wrap">
					<div class="footer__logo">
						<a href="/" id="footer__logo">FEMCARE</a>
					</div>
					<p class="website__rights">© FEMCARE 2022. All rights reserved</p>
					<div class="social__icons">
						<a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
						<a href="/" class="social__icon--link"><i class="fab fa-instagram"></i></a>
						<a href="/" class="social__icon--link"><i class="fab fa-youtube"></i></a>
						<a href="/" class="social__icon--link"><i class="fab fa-linkedin"></i></a>
						<a href="/" class="social__icon--link"><i class="fab fa-twitter"></i></a>
					</div>
				</div>
			</section>
		</div>
		<script src="app.js"></script>
</body>

</html>