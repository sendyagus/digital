<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

include 'koneksi.php';
$bukuid = $_GET['bukuid'];
$userid=$_SESSION['userid'];
$ubah = "SELECT * FROM user,buku WHERE bukuid='$bukuid' AND userid='$userid'";
$query =mysqli_query($conn,$ubah);
$data =mysqli_fetch_array($query);
 ?>


<h1>Halaman Edit kategori</h1>
<a href="?url=buku" class="btn btn-outline-light">Kembali</a>
<hr>	
<form action="?url=function&bukuid=<?=$data['bukuid'];?>" method="post">
	<div class="form-group mb-2">
		<label for="namakategori">namalengkap</label>
		<input type="text" name="namalengkap" id="namakategori" class="form-control" value="<?= $data['namalengkap'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="namakategori">judul</label>
		<input type="text" name="judul" id="namakategori" class="form-control" value="<?= $data['judul'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="ulasan">ulasan</label>
        <textarea name="ulasan" id="ulasan" cols="196" rows="10"></textarea>
		</div>
		<select class="form-control" name="rating" id="" >
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
	
	<div class="form-group">
		<button type="submit" name="tambahulasan" class="btn btn-outline-success">SIMPAN</button>
		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>
</body>
</html>