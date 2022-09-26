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



	<!-- Guru -->


			<div class="container blue-text">
				<h4>Guru</h4>
		<a href="?page=sdm&aksi=tambahguru" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Guru</a>
			</div>


			<?php 

				$query = mysqli_query($conn, "select * from guru ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



			<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/guru/<?php echo $data['foto'] ?>">
				<h5><?=$data['guru'] ?></h5>
				<a href="?page=sdm&aksi=editguru&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<a href="?page=sdm&aksi=hapusguru&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Hapus</a>
				<br><br>				  
			</div>
		</div>
		</div>
	</div>





	<?php } ?>






<!-- Staf -->


			<div class="container red-text">
				<h4>Staf & Karyawan</h4>
		<a href="?page=sdm&aksi=tambahstaf" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Staf</a>
			</div>


			<?php 

				$query = mysqli_query($conn, "select * from staf ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



			<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/staf/<?php echo $data['foto'] ?>">
				<h5><?=$data['staf'] ?></h5>
				<a href="?page=sdm&aksi=editstaf&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<a href="?page=sdm&aksi=hapusstaf&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Hapus</a>
				<br><br>				  
			</div>
		</div>
		</div>
	</div>





	<?php } ?>







	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>