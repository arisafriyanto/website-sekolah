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


	<div class="container">


		<h4>Tambah Kepsek</h4><br><br>



	   <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <input id="judul_slogan" name="nama" type="text" class="">
          <label for="judul_slogan">nama</label>
        </div>
      </div>




	 <div class="row">
	      <div class="row">
	        <div class="input-field col s12">
	          <textarea id="textarea1" name="sambutan" class="materialize-textarea"></textarea>
	          <label for="textarea1">sambutan</label>
	        </div>
	      </div>
	  </div>



	  <div class="row">
	      <div class="file-field input-field">
      		<div class="btn blue">
      		  <span>Add Gambar</span>
      		  <input type="file" name="foto">
     		</div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
	      </div>
	    </div>
	  </div>



	  <button class="btn waves-effect waves-light" type="submit" name="tambah">Submit
	    <i class="material-icons right">send</i>
	  </button>

	  <a href="index.php?page=home" class="btn waves-effect waves-light" ><i class="material-icons left">fast_rewind</i>Kembali</a>
	    </form>


	</div>



	<?php 

		if(isset($_POST['tambah']))	{
			if(tambahkepsek($_POST) > 0) {
				echo "<script>
							alert ('Slogan Berhasil Ditambahkan');
							window.location.href='index.php?page=home';
					  </script>
					  ";
			}
		}

	?>



	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>