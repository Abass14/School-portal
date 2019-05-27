<?php
	require_once 'connection.php';
	
	$query = "SELECT * FROM `courses`";
	$result = mysqli_query($connect, $query);

	if ($result) {
		while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
			$di = $row[0]['id'];
			$delete = "DELETE FROM `courses` WHERE id = '$di'";
			mysqli_query($connect, $delete);
		}
		header('Location:staff-post-course.php');
	}
?>