<?php
	require_once 'connection.php'; 
	$department = $_POST['dept'];
	$course = $_POST['courseCode'];
	$unit = $_POST['unit'];

	$query = "SELECT * FROM `courses` WHERE department = '$department'";
	$result = mysqli_query($connect, $query);
	// $num = mysqli_num_rows($result);

	if ($result) {
		$insert = "INSERT INTO `courses`(`department`, `course`, `unit`) VALUES ('$department','$course','$unit')";
		mysqli_query($connect, $insert);
		$_SESSION['courseSuccess'] = true;
		header('Location:staff-post-course.php');
	}else {
		echo "not working";
	}
?>