<?php
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
	<div class="content3">
	<h1><center><span style="color:white">SELAMAT DATANG DI HD_SOFT</span></center></h1>
	<hr/>
	<h4>
	<?php
	$q = mysql_query("SELECT * FROM menu ORDER BY RAND() LIMIT 5");
		while($row = mysql_fetch_array($q)){
	echo"<div class='home'>
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
	</h4>
	<h3><center><span style="color:white">Selamat Berbelanja Di HD_SOFT</span></center></h3>
	</div>
	</div>
	



	<div class="footer">
	copyright@trisetioko
	</div>
</div>

</body>
</html>