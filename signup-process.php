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
		$reg = "INSERT INTO `register`(`authority`, `name`, `email`, `password`, `phone`, `token`) VALUES ('student','$name','$email','$password','$phone','')";
		mysqli_query($connect, $reg);
		echo "Registration ";
		header('Location:login.php');
		// while ($row = mysqli_fetch_assoc($result)) {
		// 	$
		// }
	}

	$q = "SELECT * FROM `student`";

	$r = mysqli_query($connect, $q);

	$n = mysqli_num_rows($r);

	if($n){
		echo "Existing User name";
		header('Location:sign-up.php');
	}else{
		// $hashed = hash('sha512', $User_Password);
		$r = "INSERT INTO `student`(`id`, `name`, `email`, `password`, `phone`, `token`) VALUES ('$name','$email','$password','$phone','')";
		mysqli_query($connect, $r);
		echo "Registration ";
		header('Location:login.php');
	}


?>


