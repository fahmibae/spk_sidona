<?php
error_reporting(0);
$db_host	= "localhost";
$db_user	= "root";
$db_pass	= "";
$db_name	= "wisatadb";
$konek	= mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die ("Gagal koneksi ke server");
?>
