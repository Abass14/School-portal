<?php 
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'school');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$salt = "alhaji101";
	$password = $_POST['password'].$salt;
	$password = sha1($password);
	$phone = $_POST['phone'];

	$query = "SELECT * FROM `register` where email = '$email'";

	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);

	if($num){
		echo "Existing User name";
		header('Location:sign-up.php');
	}else{
		// $hashed = hash('sha512', $User_Password);
		$reg = "INSERT INTO `register`(`name`, `email`, `password`, `phone`, `token`) VALUES ('$name','$email','$password','$phone','')";
		mysqli_query($connect, $reg);
		echo "Registration ";
		header('Location:login.php');
	}


?>


