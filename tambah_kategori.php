
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<div class="container ">
	<h1>Halaman Tambah Data Kategori Buku</h1>
<a href="kategori.php" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=function" method="post" >	
	
	<div class="form-group mb-2">
		<label>nama Kategori</label>
		<input type="text" name="namakategori" class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" name="tambahkategori" class="btn btn-success">SIMPAN</button>
		<button type="reset" class="btn btn-warning">KOSONGKAN</button>
		
	</div>
	
</form>
</div>
</body>
</html>