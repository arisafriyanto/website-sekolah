<!DOCTYPE html>
<html>
	<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../../assets/css/materialize.min.css"  media="screen,projection"/>
	<!-- mycss -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Smp Muhammadiyah Wanasari</title>
	</head>

<body >


	<!-- kepsek -->





	<div class="container red-text">
		<h4>Sambutan Kepala Sekolah</h4>
	</div>



	<?php 

		$query = mysqli_query($conn, "select * from kepsek ");
		$data = mysqli_fetch_assoc($query);

	?>


	<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/kepalasekolah/<?php echo $data['foto_kepsek'] ?>">
				<h5><?=$data['nama'] ?></h5>
				<p><?=$data['sambutan'] ?></p>
				<a href="?page=home&aksi=editkepsek&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<br><br>
			</div>
		</div>
		</div>
	</div>






	<!-- berita -->


			<div class="container blue-text">
				<h4>Berita</h4>
		<a href="?page=home&aksi=tambahberita" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Berita</a>
			</div>


			<?php 

				$query = mysqli_query($conn, "select * from berita ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



			<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/berita/<?php echo $data['gambar'] ?>">
				<h5><?=$data['judul_berita'] ?></h5>
				<p><?=$data['isi_berita'] ?></p>
				<a href="?page=home&aksi=editberita&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<a href="?page=home&aksi=hapusberita&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Hapus</a>
				<br><br>				  
			</div>
		</div>
		</div>
	</div>



	<?php } ?>






	<!-- siswa -->





	<div class="container black-text">
				<h4>Siswa</h4>
			</div>




			<?php 

				$query = mysqli_query($conn, "select * from siswa ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



			<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
				<h5><?php echo $data['kelas']; ?></h5>
				<h3><?php echo $data['jumlah']; ?></h3>
				<a href="?page=home&aksi=editsiswa&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<br><br>				  
			</div>
		</div>
		</div>
	</div>



	<?php
	
		@$total = $total+$data['jumlah'];

	 }


	 ?>

	 <div class="container center">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
				<h5>Jumlah Seluruh Siswa</h5>
				<h3><?php echo $total; ?></h3>
				<br><br>				  
			</div>
		</div>
		</div>
	</div> 

	 






	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>