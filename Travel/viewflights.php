<?php
session_start();

if(isset($_SESSION['username']))
$email=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>View_Flights</title>
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
			
			<?php
			require('db.php');
			$q=mysql_query("select * from transport");
			
			for($i=0;$detail[$i]=mysql_fetch_array($q,MYSQL_NUM);$i++);
			
			$count= mysql_num_rows($q);
					echo '<table border="20px">
					<tr>
						<th> Flight Name </th>
						<th> Flight Number </th>
						<th>  Source </th>
						<th>  Destination </th>
						<th>   Price </th>
						<th> Mode   </th>
						<th>  Starting Date  </th>
						<th> Ending Date  </th>
						<th>  Class </th>
						<th> Starting Time </th>
						<th> Arrival Time </th>
						<th>   </th>
						</tr>';
					echo "<div style=\"margin-top:-260px;\">";
					for($i=0;$i<$count;$i++)
					{	
						
						$a = $detail[$i][0];
						$b = $detail[$i][1];
						$c = $detail[$i][2];
						$d = $detail[$i][3];
						$e = $detail[$i][4];
						$f = $detail[$i][5];
						$g = $detail[$i][6];
						$h = $detail[$i][7];
						$j = $detail[$i][8];
						$k = $detail[$i][9];
						$l=$detail[$i][10];
						
						$ii=$i+1;
						echo "<tr>
						<td>$a</td>
						<td>$b</td>
						<td>$c</td>
						<td>$d</td>
						<td>$e</td>
						<td>$f</td>
						<td>$g</td>
						<td>$h</td>
						<td>$j</td>
						<td>$k</td>
						<td>$l</td>
						
						
						
						
						
						</tr>";
						
						
						
					}echo '</div>';
					echo '</table>';
					
				
			
			
			
			?>			
</body>
</html>