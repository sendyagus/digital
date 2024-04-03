

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
$kategoriid = $_GET['kategoriid'];
$ubah = "SELECT * FROM  kategori WHERE kategoriid = '$kategoriid'";
$query =mysqli_query($conn,$ubah);
$data =mysqli_fetch_array($query);
 ?>

<div class="container">
	
	<h1>Halaman Edit kategori</h1>
	<a href="?url=buku" class="btn btn-primary">Kembali</a>
	<hr>	
	<form action="function.php?&kategoriid=<?= $kategoriid;?>" method="post">
	<div class="form-group mb-2">
		<label for="namakategori">namakategori</label>
		<input type="text" name="namakategori" id="namakategori" class="form-control" value="<?= $data['namakategori'] ?>" required>
	</div>
	
	<div class="form-group">
		<button type="submit" name="editkategori" class="btn btn-success">SIMPAN</button>
		<button type="reset" class="btn btn-warning">KOSONGKAN</button>
	</div>
	
</div>
	</form>
</body>
</html>