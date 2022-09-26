








	<div class="container">
		<h4>Slogan</h4>
		<a href="?page=home&aksi=tambahslogan" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Slogan</a>
	</div>



	<?php 

		$query = mysqli_query($conn, "select * from home ");
		while ($data = mysqli_fetch_assoc($query)) {

	?>


	<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/slogan/<?php echo $data['gambar_slogan'] ?>">
				<p><?=$data['judul_slogan'] ?></p>
				<h5><?=$data['isi_slogan'] ?></h5>
				<a href="?page=home&aksi=editslogan&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<a href="?page=home&aksi=hapusslogan&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Hapus</a>
				<br><br>
			</div>
		</div>
		</div>
	</div>


	<?php } ?>

