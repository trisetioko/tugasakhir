<html lang="en">
<?php
include "konek.php";
$id = $_GET['id'];

$q = mysql_query("SELECT * FROM menu WHERE id='".$id."'");
$row = mysql_fetch_array($q);

if(!empty($_POST)){
$id = $row['id'];
$nama = $row['nama'];
$jumlah = $_POST['jumlah'];
$total = $row['harga']*$_POST['jumlah'];
$user = $_POST['user'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
	
mysql_query("INSERT INTO `order`(`notransaksi`, `id`, `nama`, `jumlah`, `total`, `user`, `alamat`, `hp`, `email`) 
VALUES (NULL, '$id', '$nama', '$jumlah', '$total', '$user', '$alamat', '$hp', '$email')");
}
?>
<script language="JavaScript" type="text/javascript">
<!--
function total(){
	var nota = document.pemesanan;
	var jumlah2=  <?php echo $row['harga']; ?> * parseInt(nota.jumlah.value);
	nota.jumlah21.value = jumlah2;
	}
//->
</script>

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
	<h1>Data Pembelian</h1>
<hr/>
<center>
<img src="<?php echo $row['gambar'];?>" width="250px"/>
</center>
<hr/>
<form name="pemesanan" method="POST" target="">
<table width="830px">
<tr>
	<th align="left">ID</th><td> : </td><td><?php echo $row['id'];?></td>
</tr>
<tr>
	<th align="left">Nama Product</th><td> : </td><td><?php echo $row['nama'];?></td>
</tr>
<tr>
	<th align="left">Harga</th><td> : </td><td>Rp. <?php echo number_format($row['harga'], 0 , ',' , '.');?>,-</td>
</tr>
<tr>
	<th align="left">Jumlah </th><td> : </td><td><input type="text" name="jumlah" value="0" size="5"  onchange="total()"/> pcs</td>
</tr>
<tr>
	<th align="left">Total</th><td> : </td><td><input type="number" name="jumlah21" value="0" readonly="true" size="30"/></td>
</tr>
<tr>
	<th align="left">Nama Pemesan</th><td> : </td><td><input type="text" name="user" size="30"/></td>
</tr>
<tr>
	<th align="left">Alamat Lengkap</th><td> : </td><td><input type="text" name="alamat" size="30"/></td>
</tr>
<tr>
	<th align="left">No HP</th><td> : </td><td><input type="text" name="hp" size="30" /></td>
</tr>
<tr>
	<th align="left">E-Mail</th><td> : </td><td><input type="text" name="email" size="30" /></td>
</tr>
</table>
<hr/>
<center>
<input type="submit" name="submit" value="Order Sekarang !"/>
</center>
</form>

</div>
<div class="content2">
<center><span style="color:white"><h1>Untuk Info Pemesanan</h1>
<hr/>
<h4>***Untuk Pemesanan Silahkan masuk ke Menu kemudian klik icon order***</h4>
<h4>***Order akan diproses setelah customer telah menstransfer uang, setelah diproses, customer akan mendapat e-mail/sms no resi pengiriman***</h4>
<h4>***Dan untuk pembatalan dapat mengubungi kami melauli sms/email***</h4>
</span></center>
</div>	
	</div>



	<div class="footer">
	copyright@trisetioko
	</div>
</div>

</body>
</html>