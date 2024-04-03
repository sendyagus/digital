
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
	<h1>Halaman Data buku</h1>
	<a type="button" href="tambah_buku.php" class="btn btn-primary">Tambah data Buku</a>
	<a type="button" href="indexx.php" class="btn btn-primary">Kembali</a>
	

<hr>
<table class="table table-striped table-hover">
	<thead>
	<tr class="fw-bold" >
		<td>No</td>
		<td>Judul</td>
		<td>Gambar</td>
		<td>Penulis</td>
		<td>Penerbit</td>
		<td>Tahun Terbit</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>

<?php

include "koneksi.php";
$no=1;
$sql="SELECT * FROM buku ORDER BY bukuid ASC";
$query=mysqli_query($conn,$sql);
foreach($query as $data){?>
<tr>
    <td><?=$no++;?></td>
    <td><?=$data['judul']?></td>
    <td><center><img src="asset/img/<?=$data['gambar'];?>" width=90 title="<?=$data['gambar'];?>" alt=""></center></td>
    <td><?=$data['penulis']?></td>
    <td><?=$data['penerbit']?></td>
    <td><?=$data['tahunterbit']?></td>
    <td>

        <a href="edit_buku.php?bukuid=<?=$data['bukuid']?>"class= 'btn btn-outline-warning'>EDIT</a>
		
    </td>
    <td>
        <a href="hapus_buku.php?bukuid=<?=$data['bukuid']?>"class= 'btn btn-outline-danger'> hapus</a>
    </td>
</tr>



<?php
}

?>




	</tbody>
	</table>
	
</div>
	</body>
</html>
	
	
 