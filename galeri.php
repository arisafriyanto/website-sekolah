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




	<section id="galeri" class="galeri">
		<div class="container">
			<h3 class="light center grey-text text-darken">Galerry</h3>
			
				<div class="row">


				<?php 

					$query = mysqli_query($conn, "select * from galeri ");
					while ($data = mysqli_fetch_assoc($query)) {

				?>

				<div class="col m3 s12">
					<img width="90%" src="assets/img/galery/<?php echo $data['galeri'] ?>" class="responsive-img materialboxed">
					<h6 class="center"><?=$data['keterangan'] ?></h6>
				</div>

			<?php } ?>


			</div>

				
			</div>
		</div>
	</section>









	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>