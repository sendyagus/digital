<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<div class="container">
		<h1>Halaman Tambah Data Relasi Buku</h1>
<a href="relasi.php" class="btn btn-primary">Kembali</a>
<hr>
<form action="function.php" method="post" >	
	
	<div class="form-group mb-2">
		<label>Judul Buku</label>
		<select name="judul" class="form-control" required>
			<option value="">pilih judul buku</option>
			<?php 
			include"koneksi.php";
			$judul=mysqli_query($conn,"SELECT*FROM buku ORDER BY judul ASC");
			foreach ($judul as $data_judul) {
				
			
			 ?>
			 <option value="<?=$data_judul['bukuid']?>"><?=$data_judul['judul'];?></option>
			 <?php } ?>
	</select>		
	</div>
	<div class="form-group mb-2">
		<label>Kategori Buku</label>
		<select name="namakategori" class="form-control" required>
			<option value="">pilih kategori</option>
			<?php 
			include"koneksi.php";
			$namaKategori=mysqli_query($conn,"SELECT*FROM kategori ORDER BY namakategori ASC");
			foreach ($namaKategori as $data_kategori) {
				
			
			 ?>
			 <option value="<?=$data_kategori['kategoriid']?>"><?=$data_kategori['namakategori'];?></option>
			 <?php } ?>
	</select>		
	</div>
	<div class="form-group">
		<button type="submit" name=" tambahrelasi"class="btn btn-success">SIMPAN</button>
		<button type="reset" class="btn btn-warning">KOSONGKAN</button>
		
	</div>
	
</form>
			</div>
			</body>
			</html>