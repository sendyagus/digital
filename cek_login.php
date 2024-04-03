<?php
session_start();

include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek=mysqli_fetch_array($sql);
$login=mysqli_num_rows($sql);

if($login){
    session_start();
    $_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['userid'] =  $cek['userid'];
	$_SESSION['level']=$cek['level'];
	if ($cek['level']=='admin'){
		echo "<script> location.href='indexx.php'</script>";
	}elseif ($cek['level']=='petugas'){
		echo "<script> location.href='petugas/index.php'</script>";
		
	}elseif ($cek['level']=='peminjam'){
		echo "<script> location.href='peminjam.php'</script>";
}else{
	header('location:userlogin.php?login gagal');
}

}
?>