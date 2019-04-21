<?php
	require_once "connection.php";

	function accessControl($right, $con){
		$user = $_SESSION['register'];

		$query = "SELECT * from register where id = '{$user['id']}'";
		$result = mysqli_query($connect, $query);

		if($result){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			$authority = $row[0]['authority'];
		}else{
			$authority = '';
		}
		 if($authority != $right){
		 	header('Location:index.php');
		 	exit;
		 }
	}

?>