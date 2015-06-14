<?php
$h="localhost";
$u="root";
$p="";
$db="hd_soft";

$con = mysql_connect ($h, $u,$p) or die ("koneksi gagal!");

mysql_select_db($db, $con);

?>