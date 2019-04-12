<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'school');

	$matric = $_POST['matric'];
	$salt = "alhaji101";
	$password = $_POST['password'].$salt;
	$password = sha1($password);

	$query = "SELECT * FROM `register` where id = '$matric' && password = '$password'";

	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);

	if($num == 1){
		while ($row = mysqli_fetch_assoc($result)) {
			$user["id"] =  $row['id'];
			$user["password"] =  $row['password'];
			$_SESSION['register'] = $user;
		}
		header('Location:home.php');
		exit;
		
	}else{
		$_SESSION['loginfailed'] = true;
		header('Location:login.php');
		// echo "incorrect login details";
		exit;
	}

?>