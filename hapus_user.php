<?php 

include'koneksi.php';

$userid = $_GET['userid'];

$hapus= mysqli_query($conn,"DELETE FROM user WHERE userid= '$userid'");


if ($hapus) {
 		header('location:?url=datauser');

}else{
		echo "<script>alert('mantap');
			 window.location.assign('?url=spp');</script>";
	}





 ?>