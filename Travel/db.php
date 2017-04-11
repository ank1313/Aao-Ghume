<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
die("Can't connect to the database...");
else
{
	if(@mysql_select_db("project")){}
	//echo("Connection Sucessful!!!");
	else	
	die("Cannot connect to database");
}
?>