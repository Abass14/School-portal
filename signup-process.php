<?php 
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'school');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$department = $_POST['department'];
	$salt = "alhaji101";
	$password = $_POST['password'].$salt;
	$password = sha1($password);
	$passLength = strlen($password);
	$phone = $_POST['phone'];
	

	$query = "SELECT * FROM `register` where email = '$email'";

	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);

	if($num){
		// echo "Existing User name";
		header('Location:sign-up.php');
	}elseif($passLength < 6){
		$_SESSION['passError'] = true;
		header('Location:sign-up.php');
	}elseif($name == "" || $password == "" || $phone == ""){
		$_SESSION['requiredError'] = true;
		header('Location:sign-up.php');
	}else{
		// $hashed = hash('sha512', $User_Password);
		$_SESSION['signupSuccess'] = true;
		$reg = "INSERT INTO `register`(`authority`, `name`, `email`, `department`, `password`, `phone`, `token`) VALUES ('student','$name','$email','$department','$password','$phone','')";
		mysqli_query($connect, $reg);
		// echo "Registration ";
		header('Location:login.php');
		// while ($row = mysqli_fetch_assoc($result)) {
		// 	$
		// }
	}



?>


