<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php?page=sdm");
	}

	$id = $_GET['id'];

	if(isset($_GET['id'])) {
		$sql = mysqli_query($conn, "delete from guru where id='$id' ");
		header("location: index.php?page=sdm");
	}

?>