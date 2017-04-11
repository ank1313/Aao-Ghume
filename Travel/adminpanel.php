<?php
session_start();
if(isset($_SESSION['username']))
$email=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin_Panel</title>
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
				<h1><a href="index.php" id="logo">Around the World</a></h1>
				<div class="right">
					<div class="wrapper">
						
							<div class="bg">
							</div>
						</form>
					</div>
			<nav>
				<ul id="menu">
					<li><a href="index.php" class="nav1">Home</a></li>
					<li><a href="about.html" class="nav2">About Us </a></li>
				</ul>
			</nav>
			</header>
			<br>
			
			<ul style="margin-top:-270px;">
			<li>
			<a href="updateflights.php"><button style="width:200px; height:50px; background:transparent; border:2px solid black;"><h2> Update Flights </h2></button></a>
			</li>
			<br>
			<br>
			<li>
			<a href="viewflights.php"><button style="width:200px; height:50px; background:transparent; border:2px solid black;"><h2> View Flights </h2> </button></a>
			</li>
			</ul>
</body>
</html>