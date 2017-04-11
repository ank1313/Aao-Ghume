<?php
session_start();
if(isset($_SESSION['username']))
	$email=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script src="gallery/js/jquery.js" type="text/javascript"></script> 
 <script src="gallery/js/swfobject.js" type="text/javascript"></script> 
 <script src="gallery/js/flashgallery.js" type="text/javascript"></script> 

</head>
<body id="page1">
<div class="extra">
	<div class="main">
		<header>
			<div class="wrapper">
				<h1><a href="index.php" id="logo">Heaven's Paradise</a></h1>
				<div class="right">
					<div class="wrapper">
					
						<form id="search" action="" method="post">
							<div class="bg">
								<input type="submit" class="submit" name="submit" value="">
								<input type="text" class="input" name="search">
							</div>
						</form>
									
					</div>
					
							<?php if(isset($_SESSION['username'])) echo "<div style=\"margin-right:350px; margin-top:-50px;\"><center><h3>Welcome $email</h3></center></div>"; ?>
					<div class="wrapper">
					
						<nav>
							<ul id="top_nav">
							<?php 
							if(isset($_SESSION['username']))
							echo '<li><a href="logout.php">Logout</a></li>';
						else
						{
							echo '<li><a href="signup.php">Register</a></li>
								<li><a href="login.php">Log In</a></li>
								';
						}

							?>
								
							</ul>
						</nav>
					</div>	
				</div>
			</div>
			<nav>
				<ul id="menu">
					<li><a href="index.php" class="nav1">Home</a></li>
					<li><a href="about.html" class="nav2">About</a></li>
					<?php
					if(isset($_SESSION['username']))
				echo'	<li><a href="myaccount.php" class="nav3">My Account</a></li>';
					?>
				
				</ul>
			</nav>
			<article class="col1">
				<ul class="tabs">
					<li><a href="#" class="active">Flight</a></li>
					
				</ul>
				<div class="tabs_cont">
					<form id="form_1" action="destinations.php" method="post">
						<div class="bg">
							<div class="wrapper">
							
							</div>
							
							<div class="wrapper"><input type="text" class="input" name="from">From</div>
							<div class="wrapper"><input type="text" class="input" name="to">To</div>	
						
							<div class="wrapper">Depart &nbsp; &nbsp;<input type="date" name="date" ></div>
						
						
							<div class="wrapper">
								<div class="radio"><input type="radio" name="name2" value="economy" checked>Economy</div>
								<div class="radio end"><input type="radio" name="name2" value="business">Business</div>
							</div>
							<div class="wrapper pad_bot1">
								
								Person <select name="person">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								</select> &nbsp;
								<input type="submit" name="submit" value="search">
							</div>
						</div>							
					</form>
				</div>
			</article>
			


	</div>
	<div class="block" style="margin-left:500px;">
	<?php
						
if(isset($_POST['submit']))
{	$search = $_POST['search'];			
		require('db.php');
			$q=mysql_query("select * from transport where source like \"%$search\" or source like \"%$search%\" or source like \"$search%\" or
destination like \"%$search\" or destination like \"%$search%\" or destination like \"$search%\" or	
tname like \"%$search\" or tname like \"%$search%\" or tname like \"$search%\" 		");
			
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
}			
				
			
			
			
			?></div>
</div>
<div class="body1">
</div>

			
<script type="text/javascript"> Cufon.now(); </script>

<div style="float:left; margin-right:10px; background:#ffffff;">

		<script type="text/javascript">
        		jQuery.flashgallery('gallery/PhotoFlowGallery.swf ', 'gallery/gallery.xml', {width: '1350px', height: '300px', background: 'transparent'});
        </script>


    <br /> 
</div>
</footer>

</body>
</html>