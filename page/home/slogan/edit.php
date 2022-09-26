<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from home where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubah($_POST) > 0) {
			echo "<script>
							alert ('Slogan Berhasil Diubah');
							window.location.href='index.php';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Slogan Berhasil Ditambahkan');
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


		<h4>Edit Slogan</h4><br><br>



	   <form action="" method="post" enctype="multipart/form-data">
	   	<input type="hidden" name="id" value="<?=$data['id']?>">
	   	<input type="hidden" name="gambarlama" value="<?=$data['gambar_slogan']?>">
      <div class="row">
        <div class="input-field col s12">
          <input id="judul_slogan" name="judul_slogan" type="text" class="" value="<?=$data['judul_slogan'] ?>">
          <label for="judul_slogan">Judul Slogan</label>
        </div>
      </div>




	 <div class="row">
	      <div class="row">
	        <div class="input-field col s12">
	          <textarea id="textarea1" name="isi_slogan" class="materialize-textarea"><?=$data['isi_slogan'] ?></textarea>
	          <label for="textarea1">Isi Slogan</label>
	        </div>
	      </div>
	  </div>



	  <div class="row">
	      <div class="file-field input-field">
      		<div class="btn blue">
      		  <span>Update Gambar</span>
      		  <input type="file" name="gambar">
     		</div>
      			<img src="../assets/img/slogan/<?php echo $data['gambar_slogan'] ?>" width="15%">
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
	      </div>
	    </div>
	  </div>



	  <button class="btn waves-effect waves-light" type="submit" name="ubah">Submit
	    <i class="material-icons right">send</i>
	  </button>

	  <a href="index.php" class="btn waves-effect waves-light" ><i class="material-icons left">fast_rewind</i>Kembali</a>
	    </form>


	</div>


	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>