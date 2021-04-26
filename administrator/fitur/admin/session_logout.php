<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../alert/css/sweetalert.css">
</head>
<body>
 <script type="text/javascript">	
 	setTimeout(function () { 
	
		swal({
            title: 'Berhasil Logout',
            text:  'Point Of Sale',
            type: 'success',
            timer: 3000,
            showConfirmButton: true
        });		
	},10);	
	window.setTimeout(function(){ 
		window.location.replace('../../index.php');
	} ,1000);	
 </script>
<script src="../alert/js/sweetalert.min.js"></script>
<script src="../alert/js/qunit-1.18.0.js"></script>
</body>
</html>