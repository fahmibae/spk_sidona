<?php
 header('Content-Type: application/json; charset=utf8');
 //panggil koneksi.php
 include("config/koneksi.php");
 $id = $_GET['id'];
 $sql="SELECT * FROM wisata where id='$id'";
 $query=mysqli_query($sql) or die(mysqli_error());

 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data; 
 
 echo json_encode($array);
?>