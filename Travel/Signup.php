<html>
<head>
	<style>
	h1
	{
		color:BLACK;
	}
	</style>
	<script type = "text/javascript">
	function validate()
	{
		var flag=0;
		var email1=/^[a-z0-9._-]+@[a-z]+.[a-z.]{2-5}$/i;
		if(!email1.test(document.myform.Email.value))
		{
			alert("Enter correct email");
			flag=1;
		}
		if(document.myform.Fname.value=="")
		{ 
			alert("Enter FirstName");
			flag=1;
		}
		if(document.myform.Lname.value=="")
		{ 
			alert("Enter Lastname");
			flag=1;
		}
		if(document.myform.Username.value=="")
		{		
			alert("Enter UserName");
			flag=1;
		}
		if(document.myform.Mobileno.value.length!=10)
		{
			alert("Enter MobileNo of length 10 characters");
			flag=1;
		}
		if(document.myform.Password.value=="")
		{
			alert("Enter Password");
			flag=1;
		}
		if(flag==1)
		return false;
		alert("Succesful Submission");	
		return true;
	}
	</script>
</head>
<body background="image2.jpg">
<center><h2><h1><font face="Viner Hand ITC"><font color="brown">AAO &nbsp; GHUME</font></h1></h2>
<marquee><p><h2>Take only Memories Leave only Footprints</p></marquee></h2>
<center><h1>Registration &nbsp; Form</h1><h2>
<form title = "Login "align = "center" name = "myform" onsubmit = "return validate();" method="post" action="Signup.php">
FirstName:	<input id = "N01" type = "text" name = "Fname">
LastName:	<input id = "L01" type = "text" name = "Lname"><br><br>
UserName:   <input id = "U01" type = "text" name = "Username"><br><br>
Email:    	<input id = "E01" type = "text" name = "Email"><br><br>
Budget:	    <input id = "B01" type = "text" name = "Budget"><br><br>
MobileNo:	<input id = "T01" type = "text" name = "Mobileno"><br><br>
Password:   <input id = "P01" type = "password" name = "Password"><br><br>
<input type = "submit" value = "Submit your details " name="submit">
<input type = "reset" value = "reset"></form>
</h2></form>
</body>
</html>


<?php
require('db.php');

if(isset($_POST['submit']))
{
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Budget=$_POST['Budget'];
$Mobileno=$_POST['Mobileno'];
$Password=$_POST['Password'];

mysql_query("INSERT INTO customer(c_fname,c_lname,cusername,c_email,c_budget,cphone_no,c_password)
				VALUES('$Fname','$Lname','$Username','$Email','$Budget','$Mobileno','$Password')");
echo "<script> window.location=\"index.php\"  </script>";
}
?>