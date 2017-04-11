<!DOCTYPE html>
<html>
<head>
<style>
h1{
color:maroon;
}
</style>
<title>log_in</title>
</head>
<body background="image2.jpg">
<center><h1><font face="Viner Hand ITC">AAO GHUME </h1></center><h2><p align="right" style="margin-top:-65px;"><a href="adminlogin.php">Admin</a></p></h2><h2>
<center>
<marquee>Take Only Memories Leave Only Footprints</marquee>
<h2>LOGIN</h2>
<form action="login.php" method="post">
USERNAME <br>
<input type="text" name="username">
<br>
PASSWORD <br>
<input type="password" name="password">
<br><br>
<input type="submit" value="Submit" name="submit">
<p>Not Registered Yet...!!! Get It Done</p>
<p><a href="Signup.php">sign up</a></p></font>
</form>
</center></h2>
</body>
</html>

<?php
require('db.php');
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password= $_POST['password'];
	
	$q=mysql_query("SELECT c_password FROM customer where cusername='$username'");
	$detail = mysql_fetch_array($q,MYSQL_NUM);
	
	if($password==$detail[0])
	{	$_SESSION['username']=$username;
		echo "<script> alert(\"Login Successful\"); </script>";
		echo "<script> window.location=\"index.php\"; </script>";
	}
	else
		echo "<script> alert(\"Login UnSuccessful\"); </script>";
	
}

?>