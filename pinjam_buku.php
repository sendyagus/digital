

<h5>Halaman tambah koleksi</h5>
<a href="?url=pinjam" class="btn btn-outline-dark">kembali</a>
<div class="container text-center">
    <div class="row justify-content-around">
        <?php 
include 'koneksi.php';
$sql="SELECT * FROM buku ORDER BY judul ASC";
$query=mysqli_query($conn,$sql);
foreach ($query as $data){?>
        <div class="card col-3 m-1">
            <form action="?url=tambah_pinjam&bukuid=<?=$data['bukuid'];?>" method="POST">
            <!-- <img src="" alt="" class="card-img-top">     -->
    <div class="card-body text-dark">
        <h5 class="card-title text-dark"><?=$data['judul'];?></h5>
        <img src="asset/img/<?=$data['gambar'];?>" width=90 title="<?=$data['gambar'];?>" alt="">
        <p class="card-text">penulis:<?=$data['penulis'];?></p>
        <p class="card-text">penerbit:<?=$data['penerbit'];?></p>
        <p class="card-text">tahunterbit:<?=$data['tahunterbit'];?></p>
        <button type="submit" name="pinjambuku" class=" btn btn-outline-success">pinjam buku</button>
    </div>
            </form>
        </div>

	<?php } ?>


    </div>
</div>



	
 