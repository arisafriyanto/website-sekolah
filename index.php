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
	<!-- mycss -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Smp N 2 Bulakamba</title>
	</head>

<body >




	<!-- navbar -->

	<div class="navbar-fixed">
    <nav class="blue darken-2">
    <div class="container">
	     <div class="nav-wrapper">
	     	<img src="assets/img/images.jfif" width="95">
	        <a href="#!" class="brand-logo"><h5>Smp N 2 Bulakamba</h5></a>
	        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	        <ul class="right hide-on-med-and-down">
		     	<li><a href="index.php">HOME</a></li>
			    <li><a href="?page=profil">PROFIL</a></li>
			    <li><a href="?page=galeri">GALLERY</a></li>
			    <li><a href="?page=blog">BLOG</a></li>
			    <li><a href="?page=sdm">SDM</a></li>
				<li><a href="login.php">LOGIN</a></li>
	        </ul>
	      </div>
		</div>
    </nav>
    </div>




    <!-- sidenav -->

     <ul class="sidenav" id="mobile-nav">
     	<li><a href="index.php">HOME</a></li>
	    <li><a href="?page=profil">PROFIL</a></li>
	    <li><a href="?page=galeri">GALLERY</a></li>
	    <li><a href="?page=blog">BLOG</a></li>
	    <li><a href="?page=sdm">SDM</a></li>
		<li><a href="login.php">LOGIN</a></li>
     </ul>








     <!-- slogan -->


     <div class="slider">
	    <ul class="slides">


	    	<?php 

				$query = mysqli_query($conn, "select * from home ");
				while ($data = mysqli_fetch_assoc($query)) {

			?>


	      <li>
	        <img src="assets/img/slogan/<?php echo $data['gambar_slogan'] ?>"> <!-- random image -->
	        <div class="caption center-align">
	          <h3><?=$data['judul_slogan'] ?></h3>
	          <h5 class="light grey-text text-lighten-3"><?=$data['isi_slogan'] ?></h5>
	        </div>
	      </li>

		  <?php } ?>


	    </ul>
	</div>







     <?php  

		 @$page = $_GET['page'];
		 @$aksi = $_GET['aksi'];


		 if($page == "profil") {
		 	if ($aksi == "") {
		 		include "profil.php";
		 	}
		 }else if($page == "") {
		 	include "home.php";
		 }else if($page == "galeri") {
		 	if ($aksi == "") {
		 		include "galeri.php";
		 	}
		 }else if($page == "blog") {
		 	if($aksi == "") {
		 		include "blog.php";
		 	}
		 }else if($page == "sdm") {
		 	if($aksi == "") {
		 		include "sdm.php";
		 	}
		 }

     ?>






    <!-- footer -->

        <footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Thank You</h5>
                <p class="grey-text text-lighten-4">Anda Telah Berkunjung Ke Situs Resmi Dari Smp Muhammadiyah Wanasari</p>
                <p>
                	LOKASI: SMAN 78 JAKARTA Jl. Bhakti IV/1 Komplek Pajak Kebun Jeruk, Kemanggisan Jakarta Barat 11480
                </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php?page=profil">Profile</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php?page=galeri">Galerry</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php?page=blog">Blog</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php?page=sdm">Sdm</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <h5 class="center"> arisafriyanto @copyright <?php echo date("Y");  ?></h5>
            </div>
          </div>
        </footer>









	<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
	const sideNav = document.querySelectorAll('.sidenav');
	M.Sidenav.init(sideNav);

	const slider = document.querySelectorAll('.slider');
	M.Slider.init(slider, {
		indicators: false,
		transition: 600,
		interval: 3000
	});

	const parallax = document.querySelectorAll('.parallax');
	M.Parallax.init(parallax);

	const materialbox = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(materialbox);


</script>
</body>
</html>