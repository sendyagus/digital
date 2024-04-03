<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

include 'koneksi.php';
$userid = $_GET['userid'];
$ubah = "SELECT * FROM  user WHERE userid = '$userid'";
$query =mysqli_query($conn,$ubah);
$data =mysqli_fetch_array($query);
 ?>


<h5>Halaman Edit Data  user</h5>
<a href="?url= user" class="btn btn-outline-light">Kembali</a>
<hr>	
<form action="?url=function&userid=<?= $userid;?>" method="post">
	<div class="form-group mb-2">
		<label for="username">username</label>
		<input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="password">password</label>
		<input type="password" name="password" id="password" maxlength="13" class="form-control" value="<?= $data['password'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="email">email</label>
		<input type="email" name="email" id="email" maxlength="50" class="form-control" value="<?= $data['email'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="namalengkap">namalengkap</label>
		<input type="text" name="namalengkap" id="namalengkap" maxlength="13" class="form-control" value="<?= $data['namalengkap'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label for="alamat">alamat</label>
		<input type="text" name="alamat" id="alamat" maxlength="13" class="form-control" value="<?= $data['alamat'] ?>" required>
	</div>
	<div class="form-group mb-2">
		<label>level</label>
		<select name="level" class="form-control" required>
			<option value=""><?= $data['level']?></option>
			<option value="admin">admin</option>
			<option value="petugas">petugas</option>
			<option value="peminjam">peminjam</option>
			
		</select>
	</div>

	<div class="form-group">
		<button type="submit" name="edituser" class="btn btn-outline-success">SIMPAN</button>
		<button type="reset" class="btn btn-outline-warning">KOSONGKAN</button>
	</div>
</form>
</body>
</html>