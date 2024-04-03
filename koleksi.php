
<h5>Halaman Data</h5>
<a href="?url=tambah_koleksi" class="btn btn-outline-dark">Tambah data Buku</a>

<hr>
<table class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold" >
		<td>No</td>
		<td>Judul</td>
		<td>Penulis</td>
		<td>Penerbit</td>
		<td>Hapus</td>
	</tr>
	</thead>
	<tbody>

<?php 
include 'koneksi.php';
$user=$_SESSION['userid'];
$no= 1;
$query=mysqli_query($conn,"SELECT * FROM user,buku,koleksi WHERE koleksi.userid=user.userid AND koleksi.bukuid=buku.bukuid AND koleksi.userid=$user ORDER BY koleksiid DESC");
	foreach($query as $data){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['judul']?></td>
		<td><?php echo $data['penulis']?></td>
		<td><?php echo $data['penerbit']?></td>
        
		<td>
			<a onclick="return confirm('apakah anda yakin menghapus data?')"href="?url=hapus_buku&koleksiid=<?=$data['koleksiid']?>" class='btn btn-outline-danger' >HAPUS</a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>


	
 