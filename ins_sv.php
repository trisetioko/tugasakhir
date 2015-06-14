<?php
include 'konek.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$gambar = $_POST['gambar'];
 
$ins = "INSERT INTO menu VALUES('$id', '$nama', '$harga', '$kategori', '$gambar')";
mysql_query($ins);
header("location:stok.php");

?>