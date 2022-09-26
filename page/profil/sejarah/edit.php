<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from sejarah where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahsejarah($_POST) > 0) {
			echo "<script>
							alert ('Sejarah Berhasil Diubah');
							window.location.href='index.php?page=profil';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Sejarah Gagal Diubah');
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


		<h4>Edit Sejarah</h4><br><br>



	   <form action="" method="post" enctype="multipart/form-data">
	   	<input type="hidden" name="id" value="<?=$data['id']?>">
	   	<input type="hidden" name="gambarlama" value="<?=$data['gambar']?>">
      <div class="row">
        <div class="input-field col s12">
          <input id="judul_sejarah" name="judul_sejarah" type="text" class="" value="<?=$data['judul_sejarah'] ?>">
          <label for="judul_sejarah">Judul Sejarah</label>
        </div>
      </div>




	 <div class="row">
	      <div class="row">
	        <div class="input-field col s12">
	          <textarea id="textarea1" name="isi_sejarah" class="materialize-textarea"><?=$data['isi_sejarah'] ?></textarea>
	          <label for="textarea1">Isi Sejarah</label>
	        </div>
	      </div>
	  </div>



	  <div class="row">
	      <div class="file-field input-field">
      		<div class="btn blue">
      		  <span>Update Gambar</span>
      		  <input type="file" name="gambar">
     		</div>
      			<img src="../assets/img/sejarah/<?php echo $data['gambar'] ?>" width="15%">
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
	      </div>
	    </div>
	  </div>



	  <button class="btn waves-effect waves-light" type="submit" name="ubah">Edit
	    <i class="material-icons right">send</i>
	  </button>

	  <a href="index.php?page=profil" class="btn waves-effect waves-light" ><i class="material-icons left">fast_rewind</i>Kembali</a>
	    </form>


	</div>


	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
</body>
</html>