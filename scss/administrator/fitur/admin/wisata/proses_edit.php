<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../alert/css/sweetalert.css">
</head>
<body>
<?php
    include '../../../../config/koneksi.php';
    $id             = $_POST['id'];
    $nama_wisata    = $_POST['nama_wisata'];
    $alamat         = $_POST['alamat'];
    $deskripsi      = $_POST['deskripsi'];
    $lattitude      = $_POST['lattitude'];
    $longitude      = $_POST['longitude'];
    $gambar         = $_FILES['gambar']['name'];
    
    $user =  mysqli_query($konek,"update wisata set id='$id', nama_lokasi='$nama_wisata', alamat='$alamat', deskripsi='$deskripsi', lat='$lattitude', lng='$longitude', gambar='$gambar' where id='$id'");
    if ($user) {
    	 echo "
			  <script type='text/javascript'>
				setTimeout(function () { 
				
					swal({
			            title: 'Berhasil Diubah',
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
			            title: 'Gagal Diubah',
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

