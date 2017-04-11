<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Destinations</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
					function initialize() {
					var mapProp = {
					center:new google.maps.LatLng(51.508742,-0.120850),
					zoom:5,
					mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body id="page2">
<div class="extra">
	<div class="main">
<!-- header -->
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
			<?php
			require('db.php');
			if(isset($_POST['submit']))
			{
				$from = $_POST['from'];
				$to = $_POST['to'];
				$date= $_POST['date'];
				$type=$_POST['name2'];
				$person= $_POST['person'];
				
				$q=mysql_query("select tname,price,tstart,tend from transport where source='$from' and destination='$to' and mode='flight' and class='$type' and dstart='$date'");
				for($i=0;$detail[$i]=mysql_fetch_array($q,MYSQL_NUM);$i++);
				$count= mysql_num_rows($q);
					echo '<table border="20px">
					<tr>
						<th> Flight Name </th>
						<th> Price </th>
						<th> Starting Time </th>
						<th> Arrival Time </th>
						<th>   </th>
						</tr>';
					
					for($i=0;$i<$count;$i++)
					{	
						$a = $detail[$i][0];
						$b = $detail[$i][1];
						$c = $detail[$i][2];
						$d = $detail[$i][3];
						echo "<tr>
						<td>$a</td>
						<td>$b</td>
						<td>$c</td>
						<td>$d</td>";
						if(isset($_SESSION['username']))
							echo "
						<td><a href=\"booking.php?fn=$a&p=$b&s=$c&a=$d&per=$person&date=$date\"> Book </a> </td>";
						echo "</tr>";
						
						
					}
					echo '</table>';
				
			}
			
			
			?>
			
		</header>
<div id="googleMap" style="margin-left:10px; margin-top:-270px; border-color:blue; border-width:5px; width:35%; height:450px; width:700px;  position: relative;">
			</div>

	

</html>