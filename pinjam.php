<?php

?>
<h5>Halaman pinjam</h5>
<a href="?url=pinjam_buku" class="btn btn-outline-dark">pinjam buku</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold" >
		<td>No</td>
		<td>Nama Peminjam</td> 
		<td>Judul</td> 
		<td>Penulis</td>
		<td>Penerbit</td>
		<td>tanggal pinjanm</td>
		<td>Tanggal pengembalian</td>
		<td>status</td>
		<td>Aksi</td>
	</tr>
	</thead>
	<tbody>

<?php 
include 'koneksi.php';
$user=$_SESSION['userid'];
$no= 1;
$sql="SELECT * FROM pinjam,user,buku WHERE pinjam.userid=user.userid AND pinjam.bukuid=buku.bukuid AND pinjam.userid=$user ORDER BY pinjamid DESC";
$query=mysqli_query($conn,$sql);
foreach ($query as $data){ ?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $data['namalengkap']?></td>
		<td><?= $data['judul']?></td>
		<td><?= $data['penulis']?></td>
		<td><?= $data['penerbit']?></td>
		<td><?= $data['tanggalpinjam']?></td>
		<td><?= $data['tanggalkembali']?></td>
        <td>
            <?php
$status=$data['status'];
if ($status =="kembali"){
    echo "<span class='badge text-bg-success'>dikembalikan</span>";
}else{
    
echo "<span class='text-danger'>dipinjam</span>";
           } ?>
        </td>
		<td>
			<a href="?url=tambah_ulasan&bukuid=<?=$data['bukuid'];?>" class="btn btn-primary">ulasan</a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table