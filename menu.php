<?php
session_start();
include 'konek.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>tri setioko</title>


<body>
<div class="wrap">

	
	<div class="header">
		<center><img src="img/HD_2.jpg" height="150" width="1200" alt="image" /></center>
		
		
	</div>
	<div class="menu">
	<ul div="nav">
		<li><a href="home.php">HOME</a></li>
		<li><a href="menu.php">MENU</a></li>
		<li><a href="order.php">ORDER ONLINE</a></li>
		<li><a href="contact.php">CONTAC US</a></li>
		<li><a href="login.php">LOGIN</a></li>
	<li>
	</ul>
	</div>
	
	<div class="content">
	<div class="content1">
		<?php

if(isset($_GET['kategori'])){
		$kategori = $_GET['kategori'];
		$q = mysql_query("SELECT * FROM menu WHERE kategori LIKE '%$kategori%'");
}
	else{
			$q = mysql_query("SELECT * FROM menu");
		}
	
	
	while($row = mysql_fetch_array($q)){
	echo"<div class='barang'>
		<center>
		<img src='".$row['gambar']."' width='225px' height='150' alt=".$row['nama']."/><br>
		".$row['nama']."
	<hr/>
		Rp. ".number_format($row['harga'], 0 , ',' , '.').",- 
		<hr/>
		
		<a href='order.php?id=".$row['id']."'><img src='img/icon_cart.png' width='50px' height='50px'/></a>
		</center>
		<hr/>
		
		
		</div>";
	}
	?>
	</div>
	<div class="content2">

	<span style="color:white"><h1>Kategori</h1></span>
<hr/>
	<div class="kategori">
	<ul id="nav">
	<ul>
	<li><a href="menu.php">Semua Kategori</a></li>
	<li><a href="menu.php?kategori=lte">4G LTE</a></li>
		<li><a href="menu.php?kategori=huawei">Huawei</a></li>
	<li><a href="menu.php?kategori=7mbps">Modem 7Mbps</a></li>
	<li><a href="menu.php?kategori=21mbps">Modem 21Mbps</a></li>
	<li><a href="menu.php?kategori=sierra">Sierra</a></li>
	<li><a href="menu.php?kategori=zte">ZTE</a></li>
	
	
	</ul>
	</div>
	</div>
	</div>
	
	<div class="footer">
	copyright@trisetioko
	</div>
</div>
</body>
</html>