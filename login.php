<?php 
		
	session_start();

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
				background-image: url(assets/img/ves.jpg);
				background-size: 100%;

			}
			.login{
				margin-top: 50px;				
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


	<!-- login form -->

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



					<div class="form-field center-align">
						<button type="submit" name="login" class="btn-large red  ">Login</button>
					</div><br>
					<a href="register.php">Not your account ??</a>
				</div>
				</form>



				<?php 

					if(isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];

						$query = mysqli_query($conn, "select * from admin where username='$username' ");

						if(mysqli_num_rows($query) === 1) {
							$data = mysqli_fetch_assoc($query);
							if(password_verify($password, $data['password'])) {
								$_SESSION['login'] = true;
								header("location: page/index.php");
							}
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