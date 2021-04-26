<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="fitur/alert/css/sweetalert.css">
</head>
<body>
<?php
session_start();
include "../config/koneksi.php";
$konek->query("SET NAMES 'utf8'");
$user = $_POST['username'];
$pass = md5($_POST['password']); 

$query_cek = mysqli_query($konek,"SELECT * FROM admin WHERE  username =  '$user' and password='$pass'");
$cek = mysqli_num_rows($query_cek);

if ($cek>0) {
	$data = mysqli_fetch_assoc($query_cek);
	$_SESSION['level'] = $data['level'];
	$_SESSION['username']  = $_POST['username'];
	$_SESSION['password']  = $_POST['password'];
	$_SESSION['nama_pengguna'] = $data['nama_pengguna'];
	echo "
			  <script type='text/javascript'>
				setTimeout(function () { 
				
					swal({
			            title: 'Berhasil Login',
			            text:  '$user',
			            type: 'success',
			            timer: 3000,
			            showConfirmButton: true
			        });		
				},10);	
				window.setTimeout(function(){ 
					window.location.replace('fitur/admin/wisata.php');
				} ,1000);	
			  </script>";

}else{

	echo "
			  <script type='text/javascript'>
				setTimeout(function () { 
				
					swal({
			            title: 'Gagal Login',
			            text:  '$user',
			            type: 'error',
			            timer: 3000,
			            showConfirmButton: true
			        });		
				},10);	
				window.setTimeout(function(){ 
					window.location.replace('index.php');
				} ,1000);	
			  </script>";
}
?>
<script src="fitur/alert/js/sweetalert.min.js"></script>
<script src="fitur/alert/js/qunit-1.18.0.js"></script>

</body>
</html>
