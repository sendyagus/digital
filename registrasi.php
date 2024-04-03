

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Modern Login Form</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
<link rel="stylesheet" href="asset/css/style3.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="login_box">
    <div class="login-header">
      <span>Registrasi</span>
    </div>

    <div class="input_box">
      <input type="text" id="user" class="input-field" required>
      <label for="user" class="label">Username</label>
      <i class="bx bx-user icon"></i>
    </div>

    <div class="input_box">
      <input type="password" id="pass" class="input-field" required>
      <label for="pass" class="label">Password</label>
      <i class="bx bx-lock-alt icon"></i>
    </div>

    <div class="remember-forgot">
      <div class="remember-me">
        <input type="checkbox" id="remember">
        <label for="remember">Remember me</label>
      </div>

      <div class="forgot">
        <a href="#">Forgot password?</a>
      </div>
    </div>

    <div class="input_box">
      <input type="submit" class="input-submit" value="Login">
    </div>

    <div class="register">
      <span>Don't have an account? <a href="#">Register</a></span>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
