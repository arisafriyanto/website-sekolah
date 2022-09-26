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


	<!-- galeri -->



	<div class="container red-text">
		<h4>Gallery</h4>
		<a href="?page=galeri&aksi=tambahgaleri" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Gallery</a>
	</div>



		<?php 

			$query = mysqli_query($conn, "select * from galeri ");
			while ($data = mysqli_fetch_assoc($query)) {

		?>





		<div class="container">
			<div class="row">
			<div class="col m8 s12">
					<div class="card-panel ">
					<img width="40%" src="../assets/img/galery/<?php echo $data['galeri'] ?>"><br/>
					<h5><?=$data['keterangan'] ?></h5>
					<a href="?page=galeri&aksi=editgaleri&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
					<a href="?page=galeri&aksi=hapusgaleri&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Hapus</a>

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