<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<div class="container">
		
<h1>Halaman Tambah Data Relasi Buku</h1>
<a href="tambah_relasi.php" class="btn btn-primary">Tambah data Buku</a>
<a href="indexx.php" class="btn btn-primary">Kembali</a>


<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold" >
		<td>No</td>
		<td>Judul Buku </td>
		<td>Kategori Buku</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>

<?php 
include 'koneksi.php';
$no= 1;
$sql="SELECT * FROM relasi,kategori,buku WHERE relasi.kategoriid= kategori.kategoriid AND relasi.bukuid=buku.bukuid ORDER BY relasiid DESC";
$query=mysqli_query($conn,$sql);
foreach ($query as $data){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['judul']?></td>
		<td><?php echo $data['namakategori']?></td>
		<td>
			<a href="edit_relasi.php?relasiid=<?=$data['relasiid']?>"class= 'btn btn-outline-warning'>EDIT</a>
		</td>
		<td>
			<a onclick="return confirm('apakah anda yakin menghapus data?')"href="hapus_relasi.php?relasiid=<?=$data['relasiid']?>" class='btn btn-outline-danger' >HAPUS</a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>

	</div>
	</body>
</html>
	
	
 