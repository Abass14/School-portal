<?php
	require_once "connection.php";

	$id = $_GET['id'];


	$query = "SELECT * from register";
	$result = mysqli_query($connect, $query);

	if($result){
		$delete = "DELETE FROM `register` WHERE id = '$id'";
		$r = mysqli_query($connect, $delete);
		header('location:admin-staff-mgt.php');
	}

?>