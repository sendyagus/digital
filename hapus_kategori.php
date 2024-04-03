<?php 

include'koneksi.php';

$kategoriid = $_GET['kategoriid'];

$hapus= mysqli_query($conn,"DELETE FROM kategori WHERE kategoriid= '$kategoriid'");


if ($hapus) {
 		header('location:kategori.php');

}else{
		echo "<script>alert('mantap');
			 window.location.assign('kategori.php');</script>";
	}





 ?>