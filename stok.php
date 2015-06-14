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
		<li><a href="hAdmin.php">HOME</a></li>
		<li><a href="stok.php">STOK</a></li>
		<li><a href="orderadmin.php">DATA ORDER</a></li>
		<li><a href="home.php">LOG OUT</a></li>
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
	echo"
	<div class='barang'>
	<div class='text'>
		<center>
		<img src='".$row['gambar']."' width='225px' height='150' alt=".$row['nama']."/><br>
		".$row['nama']."
	<hr/>
		Rp. ".number_format($row['harga'], 0 , ',' , '.').",- 
		<hr/>
		<a href='del.php?id=".$row['id']."'style='text-decoration:none'><font color='white'>DELETE</font></a>
		<hr/>
		
		</center>
		
		</div>;
		</div>";
	}
	?>
	</div>
	<div class="content2">
	<span style="color:white"><h2><center>DATA ADMIN </center></h2></span>
	<hr/>
	<div class="kategori">
	<ul id="nav">
	<ul>
	<li><a href="tambahstok.php">TAMBAH DATA</a>
	<li><a href='editstok.php?id=".$row['id']."'>EDIT</a>
	</br>
	
	</ul>
	</div>
	</div>
	



	<div class="footer">
	copyright@trisetioko
	</div>
</div>

</body>
</html>