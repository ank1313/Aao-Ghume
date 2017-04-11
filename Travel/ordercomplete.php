<?php
session_start();
$email=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Order_Complete</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body id="page2">
<div class="extra">
	<div class="main">
		<header>
			<div class="wrapper">
				<h1><a href="index.php" id="logo"></a></h1>
				<div class="right">
					<div class="wrapper">
						
							<div class="bg">
							</div>
						</form>
					</div>
			<nav>
				<ul id="menu">
					<li><a href="index.php" class="nav1">Home</a></li>
					<li><a href="About.html" class="nav2">About Us </a></li>
				</ul>
			</nav>
			</header>
			<h2 style="margin-top:-190px;"><font color='black'> Your Booking Is Successful </h2>
			<center><a href="myorders.php"><button
			><h2><font color='black'>View Orders </h2></button></a></center>
	</div>
	<div class="block"></div>
</div>
</body>
</html>