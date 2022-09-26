<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from guru where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahguru($_POST) > 0) {
			echo "<script>
							alert ('Guru Berhasil Diubah');
							window.location.href='index.php?page=sdm';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Guru Gagal Diubah');
					  </script>
					  ";
		}
	}

?>
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


		<h4>Edit Guru</h4><br><br>



	   <form action="" method="post" enctype="multipart/form-data">
	   	<input type="hidden" name="id" value="<?=$data['id']?>">
	   	<input type="hidden" name="fotolama" value="<?=$data['foto']?>">
      <div class="row">
        <div class="input-field col s12">
          <input id="guru" name="guru" type="text" class="" value="<?=$data['guru'] ?>">
          <label for="guru">guru</label>
        </div>
      </div>



	  <div class="row">
	      <div class="file-field input-field">
      		<div class="btn blue">
      		  <span>Update Foto</span>
      		  <input type="file" name="foto">
     		</div>
      			<img src="../assets/img/guru/<?php echo $data['foto'] ?>" width="15%">
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
	      </div>
	    </div>
	  </div>



	  <button class="btn waves-effect waves-light" type="submit" name="ubah">Edit
	    <i class="material-icons right">send</i>
	  </button>

	  <a href="index.php?page=sdm" class="btn waves-effect waves-light" ><i class="material-icons left">fast_rewind</i>Kembali</a>
	    </form>


	</div>


	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>