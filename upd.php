<?php
include 'konek.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$gambar = $_POST['gambar'];

$upd = "UPDATE menu SET id='$id', nama='$nama', harga='$harga', kategori='$kategori', gambar='$gambar' WHERE id='$id'";
mysql_query($upd);
header('location:stok.php');
?>