<?php
	require_once "connection.php";
	$email = $_SESSION['email'];
	$token = $_SESSION['token'];
	$salt = "alhaji101";
	$password1 = $_POST['password1'].$salt;
	$password2 = $_POST['password2'].$salt;
	$password1 = sha1($password1);
	$password2 = sha1($password2);


	// require_once "connection.php";
	// $salt = "alhaji101";

	// // $password = $_POST['password'].$salt;
	// $password1 = $_POST['password1'].$salt;
	// $password2 = $_POST['password2'].$salt;
	// $password1 = sha1($password1);
	// $password2 = sha1($password2);
	// // $password = sha1($password);

	$query = "SELECT * FROM `register` WHERE email = '$email' AND token = '$token'";
	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);

	if($num = 1 && ($password1 == $password2)){
		// echo "working";
		while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
				$update = "UPDATE `register` SET `password`= '$password2' where email = '$email'";

				mysqli_query($connect, $update);
				header('location:login.php');
				echo "working";
				$_SESSION['msg'] = true;
			}
		}else{
			echo "Not working";
			$_SESSION['error'] = true;
			header('location:reset-password.php');

		}

?>