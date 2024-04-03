<?php 

include'koneksi.php';

$bukuid = $_GET['bukuid'];

$hapus= mysqli_query($conn,"DELETE FROM buku WHERE bukuid= '$bukuid'");


if ($hapus) {
 		header('location:buku.php');

}else{
		echo "<script>alert('mantap');
			 window.location.assign('buku.php');</script>";
	}





 ?>