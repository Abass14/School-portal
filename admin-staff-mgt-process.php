<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'school');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$department = $_POST['department'];
	$salt = "adisa";
	$str = "absghtGSHT5678HVH";
	$str = str_shuffle($str);
	$password = sha1($str).$salt;
	$query = "SELECT * FROM `staff` where email = '$email'";
	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);
	if($num){
		echo "Not working";
		$_SESSION['error-msg'] = true;
		header('location:admin-staff-mgt.php');
	}else{
		$from = "School\r\n";
		$subject = "<html>
						<head></head>
						<body>
							<div style = 'background-color: blue; color: white;'>Admin</div>
						</body>
					</html>";
		$message = "<html>
						<head></head>
						<body>
							<h1 style = 'background-color: red; color: white;'>Hello $name</h1>
							<div style = 'background-color: white; color: blue;'>You have been successfully added as memeber of the staff team</div>";
		while ($row = mysqli_fetch_assoc($result)) {
			$message .= "
							<div style = 'background-color: white; color: blue;'>
								<ul>
									<li>Login number: {$row['id']}</li>
								</ul>
								<p>Reset your password by clicking forgot password</p>
							</div>
							</body>
						</html>";
		}
		mail($email, $subject, $message, $from);
		header('location:admin-staff-mgt.php');
		$insert = "INSERT INTO `staff`(`name`, `email`, `phone`, `department`) VALUES ('$name','$email','$phone','$department')";
		mysqli_query($connect, $insert);
		header('location:admin-staff-mgt.php');
		$_SESSION['success'] = true;
		echo "Working";
	}

	$Q = "SELECT * FROM `register` where email = '$email'";
	$R = mysqli_query($connect, $Q);

	$n = mysqli_num_rows($R);
	if($n){
		echo "Not working";
		// $_SESSION['error-msg'] = true;
		header('location:admin-staff-mgt.php');
	}else{
		$i = "INSERT INTO `register`(`authority`, `name`, `email`, `password`, `phone`, `token`) VALUES ('staff','$name','$email','$password','$phone','')";
		mysqli_query($connect, $i);
		header('location:admin-staff-mgt.php');
		// $_SESSION['success'] = true;
		echo "Working";
	}

?>