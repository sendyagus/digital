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
	
<h1>Halaman Data Kategori Buku</h1>
<a href="tambah_kategori.php" class="btn btn-primary">Tambah kategori</a>
<a href="indexx.php" class="btn btn-primary">Kembali</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold" >
		<td>No</td>
		<td>nama Kategori</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>

<?php 
include 'koneksi.php';
$no= 1;
$sql="SELECT * FROM kategori ORDER BY kategoriid DESC";
$query=mysqli_query($conn,$sql);
foreach ($query as $data){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['namakategori']?></td>
		
		<td>
			<a href="edit_kategori.php?kategoriid=<?=$data['kategoriid']?>"class= 'btn btn-outline-warning'>EDIT</a>
		</td>
		<td>
			<a onclick="return confirm('apakah anda yakin menghapus data?')"href="hapus_kategori.php?kategoriid=<?=$data['kategoriid']?>" class='btn btn-outline-danger' >HAPUS</a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	
</div>
	</body>
</html>
	
	
 