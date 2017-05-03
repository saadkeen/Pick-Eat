<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Main Course - Pick & Eat</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="../../css/ie7.css">	
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="../../css/ie6.css">	
	<![endif]-->
</head>
<body>
	<div id="header"> <!-- start of header -->
		<span class="signboard"></span>
		<ul id="infos">
			<li class="home"> 
				<a href="../../Login/index.html">HOME</a> 
			</li>
			<li class="phone">
				<a href="../../Login/contact.html">+92 321 9090415 <br>+92 333 7763776</a> 
			</li>
			<li class="address">
				<a href="../../Login/contact.html">Fast NUCES Peshawar Campus, 160, Industrial Estate, <br>Hayatabad, Jamrud Road, Peshawar, Khyber Pakhtunkhawa, <br>Pakistan</a> 
			</li>


		<form method="get" action="../../Index/index.html">
    		<button class="b" type="submit" >Logout</button>
		</form>


		</ul>
		<br><br><br><br><br>
		<h1 style="font-family:DynalightRegular ; font-size: 5em; display: inline-block; position: absolute; left: 25px; top: 50px;">Pick & Eat</h1>
		<ul id="navigation">
			<li><a href="../../Login/index.html"><span>Home</span></a></li>
			<li class="current"><a href="menu.php"><span>Menu</span></a></li>
			<li><a href="../../Login/about.html"><span>About</span></a></li>
			<li><a href="../../Login/contact.html"><span>Contact Us</span></a></li>
		</ul> <!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<br>
		<br>		
		<h2 class="main-course"><span>Main Course</span></h2>
		<div id="menus">

<form method=POST action="../price.php">

<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
		<th>Serial No.</th>
		<th>Item</th>
		<th>Rate</th>
	</tr>

<?php
include '../table.php';

while ($menu1 = mysqli_fetch_assoc($records1)) {
	echo "<tr>";
	echo "<td>".$menu1['id']."</td>";
	echo "<td>".$menu1['item']."</td>";
	echo "<td>".$menu1['rate']."</td>";
	echo "</tr>";

}
?>

</table>

<br>
<br>
<br>
<br>
<h2><span>Desserts</span></h2>
<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
		<th>Serial No.</th>
		<th>Item</th>
		<th>Rate</th>
	</tr>

<?php
include '../table.php';

while ($menu2 = mysqli_fetch_assoc($records2)) {
	echo "<tr>";
	echo "<td>".$menu2['id']."</td>";
	echo "<td>".$menu2['item']."</td>";
	echo "<td>".$menu2['rate']."</td>";
	echo "</tr>";

}
?>

</table>

<br>
<br>
<br>
<br>
<h2><span>Drinks</span></h2>
<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
		<th>Serial No.</th>
		<th>Item</th>
		<th>Rate</th>
	</tr>

<?php
include '../table.php';

while ($menu3 = mysqli_fetch_assoc($records3)) {
	echo "<tr>";
	echo "<td>".$menu3['id']."</td>";
	echo "<td>".$menu3['item']."</td>";
	echo "<td>".$menu3['rate']."</td>";
	echo "</tr>";

}
?>

</table>

<br>
<br>
<br>
<br>
<h2><span>Entree</span></h2>
<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
		<th>Serial No.</th>
		<th>Item</th>
		<th>Rate</th>
	</tr>

<?php
include '../table.php';

while ($menu4 = mysqli_fetch_assoc($records4)) {
	echo "<tr>";
	echo "<td>".$menu4['id']."</td>";
	echo "<td>".$menu4['item']."</td>";
	echo "<td>".$menu4['rate']."</td>";
	echo "</tr>";

}
?>

</table>
</form>
		</div>
	</div> <!-- end of contents -->
			
	<div id="footer"> <!-- start of footer -->
		<ul class="advertise">
			<li class="delivery">
				<h2>Hungry? We Deliver</h2>
				<a href="main.php">Check our Menu</a>
			</li>
			<li class="event">
				<h2>Party! Party!</h2>
				<p>Celebrate your</p>
				<p>Special Events with Us</p>
			</li>
			<li class="connect">
				<h2>Let's Keep in Touch</h2>
				<a href="https://web.facebook.com/saad.keen.5" target="_blank" class="fb" title="Facebook"></a> 
				<a href="https://twitter.com/saad_keen" target="_blank" class="twitr" title="Twitter"></a>
			</li>
		</ul>
		<div>
			<ul class="navigation">
				<li><a href="../../Login/index.html">Home</a></li>
				<li><a href="../../Login/booking.html">Book an event</a></li>
				<li><a href="../../Login/blog.html">Blog</a></li>
				<li><a href="../../Login/about.html">About</a></li>
				<li class="last"><a href="../../Login/contact.html">Contact</a></li>
			</ul>
			<span>&copy; Copyright 2017. All Rights Reserved to Rizvi & Keen</span>
		</div>
	</div> <!-- end of footer -->
</body>
</html>