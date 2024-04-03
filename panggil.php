<div class="container text-center">
	<div class="row justify-content-around">
	
		<?php
			
			include "koneksi.php";
			$pilih=$_GET['pilih'];
			if ($pilih>=1) {
			$buku = mysqli_query ($conn, "SELECT*FROM relasi,buku WHERE relasi.bukuid=buku.bukuid AND kategoriid='$pilih' ORDER BY judul ASC");
		}else{
			$buku = mysqli_query ($conn, "SELECT*FROM buku ORDER BY judul ASC");
		}
			foreach ($buku as $data_buku) {
			?>
		<div class="card col-3 m-1">
			<form method="post" action="?url=function&id_buku=<?=$data_buku['bukuid'];?>">
				<img  src="asset/img/<?= $data_buku["gambar"]; ?>" width = 200 title="<?= $data_buku['gambar']; ?>">
                
				  <div class="card-body">
				    <h5 class="card-title"><?=$data_buku['judul'];?></h5>
				    <p class="card-text">Penulis : <?=$data_buku['penulis'];?></p>
				    <p class="card-text">Penerbit : <?=$data_buku['penerbit'];?></p>
				    <p class="card-text">Tahun Terbit : <?=$data_buku['tahunterbit'];?></p>
				    <button type="submit" name="tambahkoleksi"class="btn btn-outline-success">Tambah Koleksi</button>
				    
				  </div>
			</form>
		</div>
		<?php } ?>

	</div>
	
</div>	