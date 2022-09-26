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

<body>





	
	<div class="container">
		<div class="row" >
    				<div class="card-panel ">


			<?php 

				$query = mysqli_query($conn, "select * from blog ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>


			<div class="col m4 light">
				<img class="center" src="assets/img/blog/<?php echo $data['gambar'] ?>" width="100%">
				<h6 class="black-text"></h6>
			</div>
				<h5 class="black-text"><?=$data['judul_blog'] ?></h5>
				<p class="black-text">
					<?=$data['isi_blog'] ?>
				</p>
				<br/><hr><br/>
				

			<?php } ?>


			</div>
		</div>
	</div>






	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>