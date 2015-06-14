<?php
include 'konek.php';
$id = $_GET['id'];
$del = "DELETE FROM menu WHERE id='$id'";

mysql_query($del);
header('location:stok.php');
?>