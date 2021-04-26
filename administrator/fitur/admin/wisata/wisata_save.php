<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../alert/css/sweetalert.css">
</head>
<body>
<?php
    include '../../../../config/koneksi.php';
    $nama_wisata    = $_POST['nama_wisata'];
    $alamat         = $_POST['alamat'];
    $deskripsi      = $_POST['deskripsi'];
    $lattitude      = $_POST['lattitude'];
    $longitude      = $_POST['longitude'];
    $gambar         = $_FILES['gambar']['name'];
    
    $wisata = mysqli_query($konek,"insert into wisata values (null,'$nama_wisata', '$alamat','$deskripsi','$lattitude','$longitude','$gambar')");

    if ($wisata) {
    	 echo "
			  <script type='text/javascript'>
				setTimeout(function () { 
				
					swal({
			            title: 'Berhasil Disimpan',
			            text:  '$nama_wisata',
			            type: 'success',
			            timer: 3000,
			            showConfirmButton: true
			        });		
				},10);	
				window.setTimeout(function(){ 
					window.location.replace('../wisata.php');
				} ,1000);	
			  </script>";
    }else{
    	echo "
			  <script type='text/javascript'>
				setTimeout(function () { 
				
					swal({
			            title: 'Gagal Disimpan',
			            text:  '$nama_wisata',
			            type: 'error',
			            timer: 3000,
			            showConfirmButton: true
			        });		
				},10);	
				window.setTimeout(function(){ 
					window.location.replace('../wisata.php');
				} ,1000);	
			  </script>";

    }
?>
<script src="../../alert/js/sweetalert.min.js"></script>
<script src="../../alert/js/qunit-1.18.0.js"></script>

</body>
</html>

