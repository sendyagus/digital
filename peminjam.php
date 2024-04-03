<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perpustakaan</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/csss/bootstrap.min.css">
    <link rel="stylesheet" href="asset/csss/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="#">swd</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li>
              <a href="?url=koleksi"><i class="fa fa-cube"></i> <span>Koleksi pribadi</span> </a>
              </li>
                <li><a href="?url=pinjam">peminjaman</a></li>
                <li><a href="?url=ulasan">Ulasan</a></li>
                <li><a href="logout.php">Logout <i class=' bx bxs-door-open'></i></a></li>
              </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
        <div class="card mt-5">
            <div class="card-body bg-info">
              <?php 
              $file=@$_GET['url']; 
              if (empty($file)) {
                echo "<h4>PERPUSTAKAAN</h4>";

                echo "<p>
                anda login sebagai peminjam
                </p>";
              }else{
                include $file.'.php';
              }
              ?>
              
            </div>
          </div>
        </div>
      </section>
    </div>
    
    </body>
</html>