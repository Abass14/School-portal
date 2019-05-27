<?php 
	require_once 'connection.php';

	$department = $_POST['dept'];
	$course = $_POST['courseCode'];
	$unit = $_POST['unit'];
	$identity = $_GET['id'];
	// var_dump($identity);
	// exit();
	// $_SESSION['identity'] = $identity;

	$query = "SELECT * FROM `courses`";
	$result = mysqli_query($connect, $query);

	if ($result) {
		$update = "UPDATE `courses` SET `department`='$department',`course`='$course',`unit`='$unit' WHERE id = '$identity'";
			mysqli_query($connect, $update);
			$_SESSION['updateSuccess'] = true;
		}

		header('Location:staff-post-course.php');
	
?>