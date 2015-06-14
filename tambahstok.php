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
	echo"<div class='barang'>
		<center>
		<img src='".$row['gambar']."' width='225px' height='150' alt=".$row['nama']."/><br>
		".$row['nama']."
	<hr/>
		Rp. ".number_format($row['harga'], 0 , ',' , '.').",- 
		<hr/>
	
		
		
		</div>";
	}
	?>
	</div>
	<div class="content2">
	
	<span style="color:white"><h2><center>DATA ADMIN </center></h2></span>
	<hr/>
	
	<form name="form" method="post" action="ins_sv.php">
	<table>
	<tr>
	<td><b>Id </b></td>
	<td> : </td>
	<td><input type="text" name="id"/></td>
	</tr>
	<tr>
	<td><b>Nama </b></td>
	<td> : </td>
	<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
	<td><b>Harga </b></td>
	<td> : </td>
	<td><input type="text" name="harga"/></td>
	</tr>
	<tr>
	<td><b>Kategori</b></td>
	<td> : </td>
	<td><input type="text" name="kategori"/></td>
	</tr>
	<tr>
	<td><b>Gambar </b></td>
	<td> : </td>
	<td><input type="text" name="gambar"/></td>
	</table>
	<br>
	<input type="submit" name="submit" value="simpan"/>
	<INPUT TYPE="button" VALUE="batal" ONCLICK="history.go(-1)"></input></br>
	</form>
	
	
	</div>
	</div>
	



	<div class="footer">
	copyright@
	</div>
</div>

</body>
</html>