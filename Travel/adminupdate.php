<?php
session_start();

if(isset($_SESSION['username']))
$email=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin_Upadte</title>
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
					<li><a href="About.html" class="nav2">About Us </a></li>
				</ul>
			</nav>
			</header>
			<br>
			
			<?php
			require('db.php');
			$id= $_GET['id'];
			echo '<div style="margin-top:-270px;">';
			 echo '<button style="width:200px; height:50px; background:transparent; border:2px solid black;"  onclick="updatepr()"> Update Price</button> </h3>';
			echo  '<button style="width:200px; height:50px; background:transparent; border:2px solid black;" onclick="updatetime()"> Update Time </button> </h3>';
			 
			 if(isset($_POST['update']))
			{	$price = $_POST['price'];
				mysql_query("update transport set price='$price' where tno='$id'");
				echo "<script> window.location=\"updateflights.php\"; </script>";
			}
			 
			 if(isset($_POST['update1']))
			{	$time = $_POST['time'];
				mysql_query("update transport set tstart='$time' where tno='$id'");
				echo "<script> window.location=\"updateflights.php\"; </script>";
			}
			
			
			?>
			
			<script>
			
			function updatepr()
			{
				a = "<form action=\"\" method=\"post\"> <input type=\"text\" name=\"price\"> <input type=\"submit\" name=\"update\" value=\"update\"> </form>";
				document.write(a);
			}
			
			function updatetime()
			{
				a = "<form action=\"\" method=\"post\"> <input type=\"text\" name=\"time\"> <input type=\"submit\" name=\"update1\" value=\"update\"> </form>";
				document.write(a);
			}
			
			</script>
</body>
</html>