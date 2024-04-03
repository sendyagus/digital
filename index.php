<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login &amp; signup form</title>
  <link rel="stylesheet" href="asset/css/input.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="title-text">
    <div class="title login">Login Form</div>
    <div class="title signup">Signup Form</div>
  </div>
  <div class="form-container">
    <div class="slide-controls">
      <input type="radio" name="slide" id="login" checked>
      <input type="radio" name="slide" id="signup">
      <label for="login" class="slide login">Login</label>
      <label for="signup" class="slide signup">Signup</label>
      <div class="slider-tab"></div>
    </div>
    <div class="form-inner">
      <form action="cek_login.php" method="post" class="login">
        <div class="field">
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="pass-link"><a href="#">Forgot password?</a></div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
      </form>

      <form action="function.php" method="post"class="signup">
        <div class="field">
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="field">
          <input type="password"  name="password" placeholder="Password" required>
        </div>
        <div class="field">
          <input type="email" name="email"  placeholder="Email" required>
        </div>
        <div class="field">
          <input type="text" name="alamat"  placeholder="alamat" required>
        </div>
        <div class="field">
          <input type="text" name="namalengkap"  placeholder="namalengkap" required>
        </div>
        <div class="field">
        <select name="level" class="form-control" required>
			<option value="">pilih level </option>
			<option value="admin"> admin</option>
			<option value="peminjam"> peminjam</option>
		</select>
    </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" name="tambahuser" value="Signup">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="asset/js/input.js"></script>

</body>
</html>