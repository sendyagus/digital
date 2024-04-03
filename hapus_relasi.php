<?php 

include'koneksi.php';

$relasiid = $_GET['relasiid'];

$hapus= mysqli_query($conn,"DELETE FROM relasi WHERE relasiid= '$relasiid'");


if ($hapus) {
 		header('location:relasi.php');

}else{
		echo "<script>alert('mantap');
			 window.location.assign('relasi.php');</script>";
	}





 ?>