<h4 class="mt-2 text-center fw-bold">HALAMAN DATA PETUGAS</h4>
<a href="registrasi.php" class="btn btn-outline-light">Tambah admin</a>

<hr>
<table  class="table table-striped table-bordered">
	<thead>
	<tr class="fw-bold">
		<td>No</td>
		<td>Username</td>
		<td>Password</td>
		<td>Email</td>
		<td>Nama admin</td>
		<td>level</td>
		<td>alamat</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
    </thead>	
<tbody>	

<?php 	
include 'koneksi.php';
$no = 1;
$sql = "SELECT * FROM user ORDER BY userid DESC";
$query = mysqli_query($conn,$sql);
foreach ($query as $data) { ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['username']?></td>
		<td><?php echo $data['password']?></td>
		<td><?php echo $data['email']?></td>
		<td><?php echo $data['namalengkap']?></td>
		<td><?php echo $data['level']?></td>
        <td><?php echo $data['alamat']?></td>
<td>
        <a href="?url=edit_user&userid=<?= $data ['userid']?>"	
			class="btn btn-outline-warning">UPDATE</a>
		</td>
		<td>
        <a onclick=" return confirm ('Apakah Anda yakin ingin menghapus data ?')" type="submit" name="deleteuser" class="btn btn-outline-success" href="?url=hapus_user&userid=<?= $data ['userid']?>">hapus</a>
		</td>
	</tr>
<?php } ?>
</tbody>
</table>