<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'school');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$department = $_POST['department'];
	$query = "SELECT * FROM `staff` where email = '$email'";
	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);
	if($num){
		echo "Not working";
		$_SESSION['error-msg'] = true;
		header('location:admin-staff-mgt.php');
	}else{
		$insert = "INSERT INTO `staff`(`name`, `email`, `phone`, `department`) VALUES ('$name','$email','$phone','$department')";
		mysqli_query($connect, $insert);
		header('location:admin-staff-mgt.php');
		$_SESSION['success'] = true;
		echo "Working";
	}

?>