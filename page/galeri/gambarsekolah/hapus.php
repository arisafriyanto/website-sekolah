<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php?page=galeri");
	}

	$id = $_GET['id'];

	if(isset($_GET['id'])) {
		$sql = mysqli_query($conn, "delete from galeri where id='$id' ");
		header("location: index.php?page=galeri");
	}

?>