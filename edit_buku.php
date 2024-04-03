

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 

include 'koneksi.php';
$bukuid = $_GET['bukuid'];
$ubah = "SELECT * FROM  buku WHERE bukuid = '$bukuid'";
$query =mysqli_query($conn,$ubah);
$data =mysqli_fetch_array($query);
 ?>
	<div class="container">
		<h1>Halaman Tambah Data buku</h1>
		<a href="buku.php" class="btn btn-primary">Kembali</a>
		<hr>	
		<form action="function.php?bukuid=<?= $bukuid;?>" method="post" enctype="multipart/form-data">
	<div class="form-group mb-2">
		<label for="judul">judul</label>
		<input type="text" name="judul" id="judul" class="form-control" value="<?= $data['judul'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="gambar">gambar</label>
		<div class="mb-2">
		<img src="asset/img/<?=$data['gambar'];?>" width=90 title="<?=$data['gambar'];?>" alt="">
		</div>
		<input value="<?= $data['gambar'] ?>" type="file" name="gambar" id="gambar"  class="form-control"  required>
	</div>
	
	<div class="form-group mb-2">
		<label for="penulis">penulis</label>
		<input type="text" name="penulis" id="penulis" maxlength="13" class="form-control" value="<?= $data['penulis'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="penerbit">penerbit</label>
		<input type="text" name="penerbit" id="penerbit" maxlength="50" class="form-control" value="<?= $data['penerbit'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="tahunterbit">tahunterbit</label>
		<input type="text" name="tahunterbit" id="tahunterbit" maxlength="13" class="form-control" value="<?= $data['tahunterbit'] ?>" required>
	</div>

	<div class="form-group">
		<button type="submit" name="editbuku" class="btn btn-success">SIMPAN</button>
		<button type="reset" class="btn btn-warning">KOSONGKAN</button>
	</div>
	
</form>
</div>
</body>
</html>
