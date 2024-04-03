<?php
    include "koneksi.php";

    //tambah user
if(isset($_POST['login'])){
$user=$_POST['username'];
$pass=$_POST['password'];
$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$level=$_POST['level'];

$sql=mysqli_query($conn,"INSERT INTO user VALUES('','$user','$pass','$namalengkap','$email','$alamat','$level')" );

if($sql){
    header('location:?url=datauser');
}else{
    echo"gagal";
}}
    //tambah user regis
if(isset($_POST['tambahuser'])){
$user=$_POST['username'];
$pass=$_POST['password'];
$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$level=$_POST['level'];

$sql=mysqli_query($conn,"INSERT INTO user VALUES('','$user','$pass','$namalengkap','$email','$alamat','$level')" );

if($sql){
    header('location:index.php');
}else{
    echo"gagal";
}}

//edit user
if(isset($_POST['edituser'])){
$userid=$_GET['userid'];
$username=$_POST['username'];
$password=$_POST['password'];
$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$level=$_POST['level'];


$sql= "UPDATE user SET username='$username',password='$password',namalengkap='$namalengkap',email='$email',alamat='$alamat',level='$level' WHERE userid='$userid'";
$query= mysqli_query($conn,$sql);

if($query){
	header("location:index.php");
}else{
	echo "<script>alert('maaf data tidak tersimpan');
	window.locatin.assign('?url=user');</script>";

}
}

//tambah buku
if(isset($_POST['tambahbuku'])){

    $foto =$_FILES['gambar']['name'];
    $tmp=$_FILES['gambar']['tmp_name'];
    $ex=explode('.',$foto);
    $newfile = uniqid().'.'.end($ex);
    move_uploaded_file($tmp, 'asset/img/'.$newfile);

    $judul=$_POST['judul'];
    $penerbit=$_POST['penerbit'];
    $penulis=$_POST['penulis'];
   
    $tahunterbit=$_POST['tahunterbit'];
    
    $sql=mysqli_query($conn,"INSERT INTO buku VALUES('','$judul','$newfile','$penulis','$penerbit','$tahunterbit')" );
    
    if($sql){
        header('location:buku.php');
    }else{
        echo"gagal";
    }}

    //edit buku
if(isset($_POST['editbuku'])){

    $foto =$_FILES['gambar']['name'];
    $tmp=$_FILES['gambar']['tmp_name'];
    $ex=explode('.',$foto);
    $newfile = uniqid().'.'.end($ex);
    move_uploaded_file($tmp, 'asset/img/'.$newfile);

    $bukuid=$_GET['bukuid'];
    $judul=$_POST['judul'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    $tahunterbit=$_POST['tahunterbit'];

    $sql="UPDATE buku SET judul='$judul',gambar='$newfile',penulis='$penulis',penerbit='$penerbit',tahunterbit='$tahunterbit' WHERE bukuid='$bukuid'";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:buku.php");

    }else{
        echo "<script>alert('maaf data tidak tersimpan');
        window.locatin.assign('?url=databarang');</script>";   
    }
}




    //kategori
    if(isset($_POST['tambahkategori'])){

        $namakategori=$_POST['namakategori'];
        
        $sql=mysqli_query($conn,"INSERT INTO kategori VALUES('','$namakategori')" );
        
        if($sql){
            header('location:kategori.php');
        }else{
            echo"gagal";
        }}
   
        
     //edit relasi   
if(isset($_POST['editkategori'])){
    $kategoriid=$_GET['kategoriid'];
    $namakategori=$_POST['namakategori'];

    $sql="UPDATE kategori SET namakategori='$namakategori' WHERE kategoriid='$kategoriid'";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:kategori.php");

    }else{
        echo "<script>alert('maaf data tidak tersimpan');
        window.locatin.assign('?url=databarang');</script>";   
    }
}


//tambah relasi
if(isset($_POST['tambahrelasi'])){
    $judul=$_POST['judul'];
    $namakategori=$_POST['namakategori'];
    $sql= "INSERT INTO relasi(bukuid,kategoriid) VALUES('$judul','$namakategori')";
    $query= mysqli_query($conn,$sql);
    
    if($query){
        header('location:relasi.php');
    }else{
        echo "<script>alert('maaf data tidak tersimpan');
        window.locatin.assign('relasi.php');</script>";
    
    
    }
}

//edit relasi
if(isset($_POST['editrelasi'])){
$relasiid=$_GET['relasiid'];
$judul=$_POST['judul'];
$nama=$_POST['nama'];

include 'koneksi.php';
$sql= "UPDATE relasi SET relasiid='$relasiid', bukuid='$judul', kategoriid='$nama' WHERE relasiid='$relasiid'";
$query= mysqli_query($conn,$sql);

if($query){
	header("location:relasi.php");
}else{
	echo "<script>alert('maaf data tidak tersimpan');
	window.locatin.assign('relasi.php');</script>";
}

}

//tambah koleksi
if(isset($_POST['tambahkoleksi'])){
    $user=$_SESSION['userid'];
    $buku=$_GET['bukuid'];

    include 'koneksi.php';
    $sql= "INSERT INTO koleksi(userid,bukuid) VALUES('$user','$buku')";
    $query= mysqli_query($conn,$sql);
    
    if($query){
        header('location:?url=koleksi');
    }else{
        echo "<script>alert('maaf data tidak tersimpan');
        window.locatin.assign('?url=koleksi');</script>";
        
    }

}

//tambah pinjam
if(isset($_POST['pinjamtambah'])){

    $user=$_SESSION['userid'];
    $buku=$_GET['bukuid'];
    $tanggalpinjam=$_POST['tanggalpinjam'];
    $tanggalkembali=$_POST['tanggalkembali'];

    include 'koneksi.php';
    $sql= "INSERT INTO pinjam(userid,bukuid,tanggalpinjam,tanggalkembali,status) VALUES('$user','$buku','$tanggalpinjam','$tanggalkembali','$status')";
    $query= mysqli_query($conn,$sql);
    
    if($query){
        header('location:?url=pinjam');
    }else{
        echo "<script>alert('maaf data tidak tersimpan');
        window.locatin.assign('?url=pinjam');</script>";
        
    }

}
if(isset($_POST['tambahulasan'])){

    $user=$_SESSION['userid'];
    $buku=$_GET['bukuid'];
    $ulasan=$_POST['ulasan'];    
    $rating=$_POST['rating'];    

    include 'koneksi.php';
    $sql= "INSERT INTO ulasan(userid,bukuid,ulasan,rating) VALUES('$user','$buku','$ulasan','$rating')";
    $query= mysqli_query($conn,$sql);
    
    if($query){
        header('location:?url=ulasan');
    }else{
        echo "<script>alert('maaf data tidak tersimpan');
        window.locatin.assign('?url=ulasan');</script>";
        
    }

}





 ?>
 
