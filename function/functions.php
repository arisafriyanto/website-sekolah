<?php 

	$conn = mysqli_connect("localhost", "root", "", "website_sekolah");


	function register($data){
		global $conn;

		$username = strtolower($data['username']);
		$password = mysqli_real_escape_string($conn, $data['password']);
		$password2 = mysqli_real_escape_string($conn, $data['password2']);

		$query = mysqli_query($conn, "select username from admin where username ='$username' ");
		if(mysqli_fetch_assoc($query)) {
			echo "<script>
					alert ('Username Sudah Digunakan');
					window.location.href='register.php';
				</script>";

				return false;
		}

		if($password !== $password2) {
			echo "<script>
					alert ('Confirm Password Harus Sama');
					window.location.href='register.php';
				</script>";

				return false;
		}


		// enkripsi password

		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "insert into admin values (null, '$username', '$password') ";
		$result = mysqli_query($conn, $query);


		return $conn;

	}




	function tambah($data) {
		global $conn;

		$judul = htmlspecialchars($data['judul_slogan']);
		$isi = htmlspecialchars($data['isi_slogan']);

		//upload gambar
		$gambar = upload();
		if(!$gambar) {
			return false;
		}

		$query = "insert into home values (null, '$judul', '$isi', '$gambar')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function upload() {
		$namafile = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$error  = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='index.php';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='index.php';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='index.php';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/slogan/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubah($data) {
		global $conn;

		$id = $_GET['id'];
		$judul = htmlspecialchars($data['judul_slogan']);
		$isi = htmlspecialchars($data['isi_slogan']);

		//upload gambar

		$gambarlama = $data['gambarlama'];

		if ($_FILES['gambar']['error']===4) {
			$gambar = $gambarlama;
		}else{
			$gambar = upload();
		}

		$query = "update home set judul_slogan='$judul', isi_slogan='$isi', gambar_slogan='$gambar' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}





	// kepsek







	function uploadkepsek() {
		$namafile = $_FILES['foto']['name'];
		$ukuran = $_FILES['foto']['size'];
		$error  = $_FILES['foto']['error'];
		$tmp_name = $_FILES['foto']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='?page=home&aksi=tambah';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='?page=home&aksi=tambah';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='?page=home&aksi=tambah';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/kepalasekolah/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubahkepsek($data) {
		global $conn;

		$id = $_GET['id'];
		$nama = htmlspecialchars($data['nama']);
		$sambutan = htmlspecialchars($data['sambutan']);

		//upload gambar

		$fotolama = $data['fotolama'];

		if ($_FILES['foto']['error']===4) {
			$foto = $fotolama;
		}else{
			$foto = uploadkepsek();
		}

		$query = "update kepsek set nama='$nama', sambutan='$sambutan', foto_kepsek='$foto' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}









	// berita



	function tambahberita($data) {
		global $conn;

		$judul = htmlspecialchars($data['judul_berita']);
		$isi = htmlspecialchars($data['isi_berita']);

		//upload gambar
		$gambar = uploadberita();
		if(!$gambar) {
			return false;
		}

		$query = "insert into berita values (null, '$judul', '$isi', '$gambar')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function uploadberita() {
		$namafile = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$error  = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='?page=home&aksi=tambahberita';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='?page=home&aksi=tambahberita';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='?page=home&aksi=tambahberita';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/berita/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubahberita($data) {
		global $conn;

		$id = $_GET['id'];
		$judul = htmlspecialchars($data['judul_berita']);
		$isi = htmlspecialchars($data['isi_berita']);

		//upload gambar

		$gambarlama = $data['gambarlama'];

		if ($_FILES['gambar']['error']===4) {
			$gambar = $gambarlama;
		}else{
			$gambar = uploadberita();
		}

		$query = "update berita set judul_berita='$judul', isi_berita='$isi', gambar='$gambar' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}






	// kelas



	function ubahkelas($data) {
		global $conn;

		$id = $_GET['id'];
		$jumlah = htmlspecialchars($data['jumlah']);
		$kelas = htmlspecialchars($data['kelas']);

		//upload gambar

		$query = "update siswa set kelas='$kelas', jumlah='$jumlah' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	// sejarah



	function ubahsejarah($data) {
		global $conn;

		$id = $_GET['id'];
		$judul = htmlspecialchars($data['judul_sejarah']);
		$isi = htmlspecialchars($data['isi_sejarah']);

		//upload gambar

		$gambarlama = $data['gambarlama'];

		if ($_FILES['gambar']['error']===4) {
			$gambar = $gambarlama;
		}else{
			$gambar = uploadsejarah();
		}

		$query = "update sejarah set judul_sejarah='$judul', isi_sejarah='$isi', gambar='$gambar' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function uploadsejarah() {
		$namafile = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$error  = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='?page=home&aksi=tambahsejarah';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='?page=home&aksi=tambahsejarah';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='?page=home&aksi=tambahsejarah';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/sejarah/" . $namafilebaru);

		return $namafilebaru;



	}








	// visimisi



	function ubahvisimisi($data) {
		global $conn;

		$id = $_GET['id'];
		$visimisi = htmlspecialchars($data['visimisi']);
		$isi = htmlspecialchars($data['isi']);

		//upload gambar

		$query = "update visimisi set visimisi='$visimisi', isi='$isi' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}





	// sarana prasarana




	function tambahsarana($data) {
		global $conn;

		$isi = htmlspecialchars($data['isi']);

		$query = "insert into saranaprasarana values (null, '$isi')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}



	function ubahsarana($data) {
		global $conn;

		$id = $_GET['id'];
		$isi = htmlspecialchars($data['isi']);

		//upload gambar

		$query = "update saranaprasarana set isi='$isi' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}













	// eskul




	function tambaheskul($data) {
		global $conn;

		$eskul = htmlspecialchars($data['eskul']);

		$query = "insert into eskul values (null, '$eskul')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}



	function ubaheskul($data) {
		global $conn;

		$id = $_GET['id'];
		$eskul = htmlspecialchars($data['eskul']);

		//upload gambar

		$query = "update eskul set eskul='$eskul' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}













	// galeri





	function tambahgaleri($data) {
		global $conn;


		//upload gambar
		$gambar = uploadgaleri();
		if(!$gambar) {
			return false;
		}

		
		$keterangan = htmlspecialchars($data['keterangan']);

		$query = "insert into galeri values (null, '$gambar', '$keterangan')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function uploadgaleri() {
		$namafile = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$error  = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='index.php?page=galeri';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='index.php?page=galeri';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='index.php?page=galeri';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/galery/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubahgaleri($data) {
		global $conn;

		$id = $_GET['id'];


		//upload gambar

		$gambarlama = $data['gambarlama'];

		if ($_FILES['gambar']['error']===4) {
			$gambar = $gambarlama;
		}else{
			$gambar = uploadgaleri();
		}

		$keterangan = htmlspecialchars($data['keterangan']);

		$query = "update galeri set galeri='$gambar', keterangan='$keterangan' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}









	// blog






	function tambahblog($data) {
		global $conn;

		$judul = htmlspecialchars($data['judul_blog']);
		$isi = htmlspecialchars($data['isi_blog']);

		//upload gambar
		$gambar = uploadblog();
		if(!$gambar) {
			return false;
		}

		$query = "insert into blog values (null, '$judul', '$isi', '$gambar')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function uploadblog() {
		$namafile = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$error  = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='?page=home&aksi=tambahblog';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='?page=home&aksi=tambahblog';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='?page=home&aksi=tambahblog';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/blog/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubahblog($data) {
		global $conn;

		$id = $_GET['id'];
		$judul = htmlspecialchars($data['judul_blog']);
		$isi = htmlspecialchars($data['isi_blog']);

		//upload gambar

		$gambarlama = $data['gambarlama'];

		if ($_FILES['gambar']['error']===4) {
			$gambar = $gambarlama;
		}else{
			$gambar = uploadblog();
		}

		$query = "update blog set judul_blog='$judul', isi_blog='$isi', gambar='$gambar' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}





	// sdm









	function tambahguru($data) {
		global $conn;

		$guru = htmlspecialchars($data['guru']);

		//upload gambar
		$foto = uploadguru();
		if(!$foto) {
			return false;
		}

		$query = "insert into guru values (null, '$guru', '$foto')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function uploadguru() {
		$namafile = $_FILES['foto']['name'];
		$ukuran = $_FILES['foto']['size'];
		$error  = $_FILES['foto']['error'];
		$tmp_name = $_FILES['foto']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='?page=sdm&aksi=tambahguru';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='?page=sdm&aksi=tambahguru';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='?page=sdm&aksi=tambahguru';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/guru/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubahguru($data) {
		global $conn;

		$id = $_GET['id'];
		$guru = htmlspecialchars($data['guru']);

		//upload gambar

		$fotolama = $data['fotolama'];

		if ($_FILES['foto']['error']===4) {
			$foto = $fotolama;
		}else{
			$foto = uploadguru();
		}

		$query = "update guru set guru='$guru', foto='$foto' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}







	// staf






	function tambahstaf($data) {
		global $conn;

		$staf = htmlspecialchars($data['staf']);

		//upload gambar
		$foto = uploadstaf();
		if(!$foto) {
			return false;
		}

		$query = "insert into staf values (null, '$staf', '$foto')";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}




	function uploadstaf() {
		$namafile = $_FILES['foto']['name'];
		$ukuran = $_FILES['foto']['size'];
		$error  = $_FILES['foto']['error'];
		$tmp_name = $_FILES['foto']['tmp_name'];



		if($error === 4) {
			echo "<script>
					alert ('Gambar Harus Diisi');
					window.location.href='?page=sdm&aksi=tambahstaf';
				  </script>";

				  return false;
		}




		if($ukuran > 100000000) {
			echo "<script>
					alert ('Ukuran Gambar Terlalu Besar');
					window.location.href='?page=sdm&aksi=tambahstaf';
				  </script>";

				  return false;
		}



		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar = explode(".", $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));

		if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
			echo "<script>
					alert ('Yang Diupload Harus Gambar');
					window.location.href='?page=sdm&aksi=tambahstaf';
				  </script>";

				  return false;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;


		move_uploaded_file($tmp_name, "../assets/img/staf/" . $namafilebaru);

		return $namafilebaru;



	}




	function ubahstaf($data) {
		global $conn;

		$id = $_GET['id'];
		$staf = htmlspecialchars($data['staf']);

		//upload gambar

		$fotolama = $data['fotolama'];

		if ($_FILES['foto']['error']===4) {
			$foto = $fotolama;
		}else{
			$foto = uploadstaf();
		}

		$query = "update staf set staf='$staf', foto='$foto' where id='$id' ";
		$result = mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
	



?>