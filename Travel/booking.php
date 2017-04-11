<?php
session_start();
$email=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Destinations</title>
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
			<?php
			require('db.php');
			
						$flightname=$_GET['fn'];
						$price=$_GET['p'];
						$startingtime=$_GET['s'];
						$arrivaltime=$_GET['a'];
						$person=$_GET['per'];
						$total = $person*$price;
						$date = $_GET['date'];
				echo "	<div style=\"margin-top:-170px;\">
					<h2>Your Flight Details Are</h2>
					<h3><font color='black'> Flight Name : $flightname </h3>
					<h3><font color='black'> Total Amount : $total </h3>
					<h3> <font color='black'>Starting Time : $startingtime </h3>
					<h3> <font color='black'>Arrival Time : $arrivaltime </h3>
					<h3> <font color='black'>Journey Date : $date </h3> 
					</div>
					";
					echo "<form action=\"\" method=\"post\">";
					echo "<center><input type=\"submit\" style=\"height:62px;\" value=\"Confirm Order\" name=\"submit\"></center>";
					echo "</form>";
					
			
			
			?>
			
			<?php
			if(isset($_POST['submit']))
			{	$p=mysql_query("select c_budget from customer where cusername='$email'");
				$pr= mysql_fetch_array($p,MYSQL_NUM);
				if($pr<$total)
				{
					echo '<script> alert("You are low on budget."); </script>';
				}
				else {
				mysql_query("insert into `order` (tdate,email,tname,price) values('$date','$email','$flightname','$total')");
				echo "<script> window.location=\"ordercomplete.php\" </script>";
				}
			}
				
			
			
			?>
</body>
</html>