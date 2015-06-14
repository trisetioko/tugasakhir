<?php
	session_start();
	include 'konek.php';
?>	
<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css' >
</head>
<title>tri setioko</title>


<body>
<div class='wrap'>

	
	<div class='header'>
		<center><img src='img/HD_2.jpg' height='150' width='1200' alt='image' /></center>
		
		
	</div>
	<div class='menu'>
	<ul div='nav'>
		<li><a href='hAdmin.php'>HOME</a></li>
		<li><a href='stok.php'>STOK</a></li>
		<li><a href='orderadmin.php'>DATA ORDER</a></li>
		<li><a href='home.php'>LOG OUT</a></li>
	<li>
	</ul>
	</div>
	<div class='content'>
	<div class='content3'>
	
	<center><h2 span style="color:white">DATA TRANSAKSI PEMBELIAN BARANG</h2></center>
	<hr/>
	
	<table border='1' align='center' width='800PX' >
<tr>
	<th>No</th>
	<th >No Trans</th>
	<th>ID</th>
	<th>Nama Barang</th>
	<th>Jumlah</th>
	<th>Total Harga</th>
	<th>Nama Pembeli</th>
	<th>Alamat</th>
	<th>No Hp</th>
	<th>Email</th>
	</tr>

	
	<?php
	$i = 1;
	$q = mysql_query("SELECT * FROM `order`");
	while($row = mysql_fetch_array($q)){
	echo"<tr align='center'>
			<td>$i</td>
			<td>".$row['notransaksi']."</td>
			<td>".$row['id']."</td>
			<td>".$row['nama']."</td>
			<td>".$row['jumlah']."</td>
			<td>".$row['total']."</td>
			<td>".$row['user']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['hp']."</td>
			<td>".$row['email']."</td>
		</tr>";
	$i++;
}

?>
</table>
	</div>
	</div>
	



	<div class='footer'>
	copyright@trisetioko
	</div>
</div>

</body>
</html>
