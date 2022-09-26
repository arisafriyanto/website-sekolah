<!DOCTYPE html>
<html>
	<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!-- mycss -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Smk Muhammadiyah Wanasari</title>
	</head>

<body >

	<?php 

		$query = mysqli_query($conn, "select * from sejarah ");
		$data = mysqli_fetch_assoc($query);

	?>

	<section  id="about" class="aboutArea grey darken-4">
	<div class="container">
		<div class="row" >
			<div class="col m12 light">
				<img class="center" src="assets/img/sejarah/<?php echo $data['gambar'] ?>" width="100%">
				<h6 class="white-text"></h6>
			</div>
				<h5 class="white-text"><?=$data['judul_sejarah'] ?></h5>
				<p class="white-text"><?=$data['isi_sejarah'] ?></p><br/><br/>

			</div>
		</div>
		</section><br/><br/>



		<h4 class="center">Visi Dan Misi</h4><br/><br/>

<!-- paralax -->
    <div class="parallax-container">
      <div class="parallax"><img src="assets/img/3.jpg" width="25%"></div>

      <div class="container jumlahsiswa">
      	<div class="row">


      			<?php 

					$query = mysqli_query($conn, "select * from visimisi ");
					while ($data = mysqli_fetch_assoc($query)) {

				?>


      		<div class="col m6 s6 center">
      			  <div class="card-panel center">
    					<h4><?=$data['visimisi'] ?></h4>
    					<p><?=$data['isi'] ?></p>
    				</div>
      		</div>


      			<?php } ?>


      	</div>
      </div>

    </div>




    <section  id="about" class="aboutArea grey darken-4">
	<div class="container">
		<div class="row" >
			<div class="col m12 s12 light">
				<h6 class="white-text"></h6>
			</div>
				<h5 class="white-text">SARANA DAN PRASARANA</h5>


					<?php 

						$query = mysqli_query($conn, "select * from saranaprasarana ");
						while ($data = mysqli_fetch_assoc($query)) {

					?>


					<p class="white-text"><?=$data['isi'] ?></p>



					<?php } ?>

					<br><br>



			<div class="col m12 s12 light">
				<h6 class="white-text"></h6>
			</div>
				<h5 class="white-text">Ekstrakulikuler</h5>


					<?php 

						$query = mysqli_query($conn, "select * from eskul ");
						while ($data = mysqli_fetch_assoc($query)) {

					?>


				<p class="white-text"><?=$data['eskul'] ?></p>


					<?php } ?>


				<br/><br/>

			</div>
		</div>
		</section>









	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>