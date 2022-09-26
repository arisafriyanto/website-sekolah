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



	<!-- Sejarah -->


			<div class="container blue-text">
				<h4>Sejarah</h4>
			</div>


			<?php 

				$query = mysqli_query($conn, "select * from sejarah ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



			<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/sejarah/<?php echo $data['gambar'] ?>">
				<h5><?=$data['judul_sejarah'] ?></h5>
				<p><?=$data['isi_sejarah'] ?></p>
				<a href="?page=profil&aksi=editsejarah&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<br><br>				  
			</div>
		</div>
		</div>
	</div>



	<?php } ?>





	<!-- visi misi -->


			<div class="container red-text">
				<h4>Visi & Misi</h4>
			</div>


			<?php 

				$query = mysqli_query($conn, "select * from visimisi ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



				<div class="container">
			<div class="row">
			<div class="col m8 s12">
					<div class="card-panel ">
						<h5><?=$data['visimisi'] ?></h5>
						<p><?=$data['isi'] ?></p>
						<a href="?page=profil&aksi=editvisimisi&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
						<br><br>				  
						</div>
					</div>
					</div>
				</div>



			<?php } ?>














			<!-- saranaprasarana -->


			<div class="container red-text">
				<h4>Sarana & Prasarana</h4>
		<a href="?page=profil&aksi=tambahsarana" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Sarana&Prasarana</a>
			</div>




				<div class="container">
			<div class="row">
			<div class="col m8 s12">
					<div class="card-panel ">
						<h5>Sarana & Prasarana</h5>

						<?php 

							$query = mysqli_query($conn, "select * from saranaprasarana ");
							while ($data = mysqli_fetch_assoc($query)) {

						?>


						<p><?=$data['isi'] ?></p>
						<a href="?page=profil&aksi=editsarana&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>


						<?php } ?>

						<br><br>				  
						</div>
					</div>
					</div>
				</div>









				<!-- eskul -->


			<div class="container red-text">
				<h4>Ekstrakulikuler</h4>
		<a href="?page=profil&aksi=tambaheskul" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Eskul</a>
			</div>




				<div class="container">
			<div class="row">
			<div class="col m8 s12">
					<div class="card-panel ">
						<h5>Ekstrakulikuler</h5>

						<?php 

							$query = mysqli_query($conn, "select * from eskul ");
							while ($data = mysqli_fetch_assoc($query)) {

						?>


						<p><?=$data['eskul'] ?></p>
						<a href="?page=profil&aksi=editeskul&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>


						<?php } ?>

						<br><br>				  
						</div>
					</div>
					</div>
				</div>



			



	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>