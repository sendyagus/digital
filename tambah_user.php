

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <title>Login Page</title>
</head>
<body>
  <div class="login-container w-50">
    <form  action='simpan_tambah_admin.php' method='post'>
      <h2 class="text-danger fw-bold">REGISTER</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <label for="email">email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">namalengkap</label>
      <input type="text" id="password" name="namalengkap" required>
	  <label for="email">alamat:</label>
      <input type="text" id="alamat" name="alamat" required>
	  <div class="form-group mb-2">
		<label>level</label>
		<select name="level" class="form-control" required>
			<option value="">pilih level </option>
			<option value="peminjam"> peminjam</option>
		</select>
	</div>

      <button type="submit" nama="tambahuser" class="w-50 mx-auto rounded-3" >Daftara</button>
    </form>
  </div>
 
</body>
</html>
