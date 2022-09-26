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





		<!-- Guru -->


			<div class="container">
				<div class="row">
					<h3 class="center blue-text">Guru</h3><br><br><br>

					<?php 

				$query = mysqli_query($conn, "select * from guru ");
				while ($data = mysqli_fetch_assoc($query)) {

					$jumlah = mysqli_num_rows($query);

			?>

				<div class="col m4 s12">
					<div class="card-panel">
					<img  width="90%" src="assets/img/guru/<?php echo $data['foto'] ?>" class="responsive-img materialboxed center">
					<h6 class="center"><?=$data['guru'] ?></h6>
				</div>
			</div>

			<?php } ?>


			</div>
		</div> 



	<!-- staf -->






			<div class="container">
				<div class="row">
					<h3 class="center red-text">Staf & Karyawan</h3><br><br><br>

					<?php 

						$query = mysqli_query($conn, "select * from staf ");
						while ($data = mysqli_fetch_assoc($query)) {

							$staf = mysqli_num_rows($query);

					?>

				<div class="col m4 s12">
					<div class="card-panel">
					<img  width="90%" src="assets/img/staf/<?php echo $data['foto'] ?>" class="responsive-img materialboxed center">
					<h6 class="center"><?=$data['staf'] ?></h6>
				</div>
			</div>

			<?php } ?>


			</div>
		</div> 










    <!-- paralax -->
    <div class="parallax-container">
      <div class="parallax"><img src="img/4.jpeg" width="25%"></div>

      <div class="container jumlahsiswa">
      	<div class="row">
      		<div class="col m6 s6 center">
      			  <i class="large material-icons">group</i>
      			  <h3><?php echo $jumlah; ?></h3>
      			  <h6>JUmlah Guru</h6>
      		</div>


      		<div class="col m6 s6 center">
      			  <i class="large material-icons">group</i>
      			  <h3><?php echo $staf; ?></h3>
      			  <h6>Staf & Karyawan</h6>
      		</div>

      	</div>
      </div>

    </div>










	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>