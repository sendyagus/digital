<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h1>Halaman Tambah Data buku</h1>
		<a href="buku.php" class="btn btn-primary">Kembali</a>
		<hr>	
		<form action="function.php" method="post" enctype="multipart/form-data">
			<div class="form-group mb-2">
				<label>judul</label>
				<input type="text" name="judul"  class="form-control" required>
			</div>
			<div class="form-group mb-2">
				<label>cover</label>
				<input type="file" name="gambar"  class="form-control" required>
	</div>
	
	<div class="form-group mb-2">
		<label>penulis</label>
		<input type="text" name="penulis"  class="form-control" required>
		
	</div>
	<div class="form-group mb-2">
		<label>penerbit</label>
		<input type="text" name="penerbit"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>tahun</label>
		<input type="number" name="tahunterbit"  class="form-control" required>
	</div>
	
	
	

<div class="form-group">
	<button type="submit" name="tambahbuku" class="btn btn-success">SIMPAN</button>
		<button type="submit" class="btn btn-warning">KOSONGKAN</button>
	</div>
</form>
</div>
</body>
</html>
