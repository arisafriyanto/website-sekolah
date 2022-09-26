<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php?page=home");
	}

	$id = $_GET['id'];

	if(isset($_GET['id'])) {
		$sql = mysqli_query($conn, "delete from home where id='$id' ");
		header("location: index.php");
	}

?>