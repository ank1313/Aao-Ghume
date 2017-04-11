<!DOCTYPE html>
<html>
<head>
<style>
h1{
color:maroon;
}
</style>
<title>AdminLog_In</title>
</head>

<body background="image2.jpg">
<center><h1><font face="Viner Hand ITC	">AAO &nbsp; GHUME </h1></center><h2><br>
<center>
<marquee>Take Only Memories Leave Only Footprints</marquee>
<h2>ADMIN LOGIN</h2><br>
<form action="" method="post">
USERNAME <br>
<input type="text" name="username">
<br>
PASSWORD <br>
<input type="password" name="password">
<br><br>
<input type="submit" value="Submit" name="submit">
</form>
</center>
</h2>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password = $_POST['password'];
	if($username=="admin" && $password=="admin")
	{
		echo "<script> window.location=\"adminpanel.php\"; </script>";
	}
	else
		echo "<script> alert(\"Incorrect Details Entered\"); </script>";
}

?>