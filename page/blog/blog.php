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




	<!-- blog -->


			<div class="container blue-text">
				<h4>Blog</h4>
		<a href="?page=blog&aksi=tambahblog" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Tambah Blog</a>
			</div>


			<?php 

				$query = mysqli_query($conn, "select * from blog ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>



			<div class="container">
		<div class="row">
		<div class="col m8 s12">
				<div class="card-panel ">
					<img width="15%" src="../assets/img/blog/<?php echo $data['gambar'] ?>">
				<h5><?=$data['judul_blog'] ?></h5>
				<p><?=$data['isi_blog'] ?></p>
				<a href="?page=blog&aksi=editblog&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Edit</a>
				<a href="?page=blog&aksi=hapusblog&id=<?=$data['id'] ?>" class="waves-effect waves-light btn"><i class="material-icons left">border_color</i>Hapus</a>
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