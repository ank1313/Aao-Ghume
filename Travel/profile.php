<?php
session_start();
$email=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
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
					$q=mysql_query("select * from customer where cusername='$email'");
					$details=mysql_fetch_array($q,MYSQL_NUM);
					echo "<div style=\"margin-top:-260px;\">";
					echo "<h3> Name : $details[0]  &nbsp;$details[1] </h3>
					<h3> Email : $details[5] </h3>
					<h3> Username : $details[3] </h3>
					<h3> Phone Number : $details[6] <button onclick=\"updateph()\"> Update Phone Number </button> </h3>";
					echo "</div>";
					
					echo "<center><button onclick=\"updatepass()\"> Update Password</button> </center>";
			?>
			
			<script>
			function updateph()
			{
				a = "<form action=\"\" method=\"post\"> <input type=\"text\" name=\"number\"> <input type=\"submit\" name=\"update\" value=\"update\"> </form>";
				document.write(a);
			}
			
			function updatepass()
			{
				a = "<form action=\"\" method=\"post\">Old Password: <input type=\"password\" name=\"password1\"> <br> New Password: <input type=\"password\" name=\"password2\"><br> <input type=\"submit\" name=\"update1\" value=\"update\"> </form>";
				document.write(a);
			}
			
			</script>
			
			<?php
			if(isset($_POST['update']))
			{	$phone = $_POST['number'];
				mysql_query("update customer set cphone_no='$phone' where cusername='$email'");
				echo "<script> window.location=\"profile.php\"; </script>";
			}
			
			if(isset($_POST['update1']))
			{
				$p1= $_POST['password1'];
				$p2= $_POST['password2'];
				
				$q1=mysql_query("select c_password from customer where cusername='$email'");
				$password=mysql_fetch_array($q1,MYSQL_NUM);
				if($p1==$password[0])
				{
					mysql_query("update customer set c_password='$p2' where cusername='$email'");
				}
				else
					echo "<script> alert(\"Wrong Password Entered\"); </script> ";
					
			}
			
			?>
	</div>
</div>
</body>
</html>