<?php
session_start();
$email=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>My_Orders</title>
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
					<li><a href="about.html" class="nav2">About Us </a></li>
				</ul>
			</nav>
			</header>
			<?php
			require('db.php');
			$q=mysql_query("select * from `order` where email='$email'");
			for($i=0;$detail[$i] = mysql_fetch_array($q,MYSQL_NUM);$i++);
			$count= mysql_num_rows($q);
			echo "<div style=\"margin-top:-190px;\">";
			for($i=0;$i<$count;$i++)
			{ echo "
				<h2> <font color='black'>Order Id :". $detail[$i][0]." </h2>
				<h2> <font color='black'>Flight Date : ".$detail[$i][1]." </h2>
				<h2> <font color='black'>Flight Name :". $detail[$i][3] ."</h2>";
				
			}
			echo "</div>";	
			?>
		
	</div>
	<div class="block"></div>
</div>
</body>
</html>