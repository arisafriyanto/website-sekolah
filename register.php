<?php 

	require "function/functions.php";

?>
<!DOCTYPE html>
<html>
	<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Smp Muhammadiyah Wanasari</title>


		<!-- css -->


		<style type="text/css">
			body {
				background-image: url(img/5.jpeg);
				background-size: cover;

			}
			.login{
				margin-top: 10px;				
			}
			.login .card{
				background: rgba(0,0,0,.6);
			}
			.login label{
				font-size: 16px;
				color: #ccc;
			}
			.login input{
				color: white;
			}
		</style>



	</head>

<body >


	<!-- Register form -->

	<div class="row login">
		<div class="col s12 m4">
			<div class="card">
				<div class="card-action red white-text center-align">
					<h3>Login</h3>
				</div>
				<form action="" method="post">
				<div class="card-content">
					<div class="form-field">
						<label for="username">Username</label>
						<input type="text" name="username" id="username">
					</div><br>



					<div class="form-field">
						<label for="password">Password</label>
						<input type="password" name="password" id="password">
					</div><br><br>



					<div class="form-field">
						<label for="password2">Confirm Password</label>
						<input type="password" name="password2" id="password2">
					</div><br><br>



					<div class="form-field center-align">
						<button type="submit" name="register" class="btn-large red ">Register</button>
					</div><br>
					<a href="login.php">Login ??</a>
				</div>
				</form>



				<?php 

					if(isset($_POST['register'])) {
						if(register($_POST) > 0) {
							header("location: login.php");
						}else{
							echo "Gagal";
						}
					}

				?>



			</div>
		</div>
	</div>



	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>