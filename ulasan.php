<?php

?>
<h1>Halaman pinjam</h1>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold" >
		<td>No</td>
		<td>Judul</td> 
        <td>gambar</td>
		<td>Nama Peminjam</td> 
		<td>Ulasan</td>
		<td>Rating</td>
	</tr>
	</thead>
	<tbody>

<?php 
include 'koneksi.php';
$user=$_SESSION['userid'];
$no= 1;
$sql="SELECT * FROM ulasan,user,buku WHERE ulasan.userid=user.userid AND ulasan.bukuid=buku.bukuid ORDER BY ulasanid DESC";
$query=mysqli_query($conn,$sql);
foreach ($query as $data){ ?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $data['judul']?></td>
        <td><img src="asset/img/<?=$data['gambar'];?>" width="100px" alt=""></td>
		<td><?= $data['namalengkap']?></td>
		<td><?= $data['ulasan']?></td>
		<td><?= $data['rating']?></td>
	
	</tr>
	<?php } ?>
	</tbody>
	</table