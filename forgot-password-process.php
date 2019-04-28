<?php
	 require_once "connection.php";

 	$email = $_POST['email'];
 

 	$query = "SELECT * FROM register where email = '$email'";

 	$result = mysqli_query($connect, $query);

 	$num = mysqli_num_rows($result);

 	if($num == 1){
 		$token = "ajhsahjaslbn6d87ubsdk";
 		$token = str_shuffle($token);
 		$token = substr($token, 0, 15);
 		$url = "http://localhost/School-Portal-project/reset-password.php?token=$token&email=$email";
 		$subject = "Reset Password";
		$message = "Click link to reset Password: $url";
		$From = "School\r\n";

		// echo $url;
		header("Location:forgot-password.php");
		$_SESSION['url'] = $url;

		mail($email, $subject, $message, $From);

		$u = " UPDATE register set token = '$token' where email = '$email'";

		$result = mysqli_query($connect, $u);
		header('location:forgot-password.php');

	}else{
		header("Location:forgot-password.php");
		echo "Wrong email";

 	}

 	


?>