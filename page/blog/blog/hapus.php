<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php?page=blog");
	}

	$id = $_GET['id'];

	if(isset($_GET['id'])) {
		$sql = mysqli_query($conn, "delete from blog where id='$id' ");
		header("location: index.php?page=blog");
	}

?>