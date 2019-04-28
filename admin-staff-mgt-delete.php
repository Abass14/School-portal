<?php
	require_once "connection.php";

	$id = $_GET['id'];


	$query = "SELECT * from staff";
	$result = mysqli_query($connect, $query);

	if($result){
		$delete = "DELETE FROM `staff` WHERE id = '$id'";
		$r = mysqli_query($connect, $delete);
		header('location:admin-staff-mgt.php');
	}

?>