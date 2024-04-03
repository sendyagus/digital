
<?php 

$bukuid= $_GET['bukuid'];
$user=$_SESSION['userid'];
include 'koneksi.php';
$query= mysqli_query($conn,"SELECT * FROM user,buku where bukuid='$bukuid' AND userid='$user'");		
$data= mysqli_fetch_array($query);

 ?>

<h5>tanggal peminjaman</h5>
<a href="?url=pinjam_buku" class="btn btn-outline-primary">Kembali</a>
<hr>
<form method="post" action="?url=function&bukuid=<?=$data['bukuid'];?>">
	<div class="form-group mb-2">
		<label>nama peminjam</label>
		<input value="<?=$data['namalengkap']?>" type="text" name="nama" disabled class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Judul</label>
		<input value="<?=$data['judul']?>" type="text" name="judul" disabled class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Penulis</label>
		<input value="<?=$data['penulis']?>" type="text" name="penulis" disabled class="form-control" required>
	</div>
	
	<div class="form-group mb-2">
		<label>Penerbit</label>
		<input value="<?=$data['penerbit']?>" type="text" name="penerbit" disabled class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Tanggal pinjam</label>
		<input type="date" name="tanggalpinjam"  class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Tanggal pengembalian</label>
		<input type="date" name="tanggalkembali"  class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" name="pinjamtambah" class="btn btn-outline-success">SIMPAN</button>

		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
		
	</div>
	
</form>