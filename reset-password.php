<?php 
	require_once "templates/head.php";
	require_once "connection.php";

	if(isset($_GET['token']) && isset($_GET['email'])){
		$email = $_GET['email'];
		$token = $_GET['token'];
		$_SESSION['email'] = $_GET['email'];
		$_SESSION['token'] = $_GET['token'];
	}else{
		$email = "";
		$token = "";
	}

	$error = '';
	if(isset($_SESSION['error']) && $_SESSION['error']){
		unset($_SESSION['error']);
		$error = "<div class='bg-danger text-white py-3 px-2'>
						Password does not match!!!
					</div>";
	}

	// $query = "SELECT * from register where email = $email AND token = $token";
	// $result = mysqli_query($connect, $result);

	// $num = mysqli_num_rows($result);

	// if($num = 1){

	// }

?>
<body class="bg-light">
	<?php require_once "templates/menu.php" ?>

	<div id="main">
		
	</div>
	<div id="">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 center-div border my-5 p-4 text-primary">
					<h2 class="text-center py-3">Reset Password</h2>
					<?php echo $error; ?>
					<form method="POST" action="reset-password-process.php" class="form-group">
						<div class="row move-center">
							<div class="col-md-4 py-2">
								<label>New Password</label>
							</div>
							<div class="col-md-8">
								<input type="password" name="password1" class="form-control">
							</div>
						</div>
						<div class="row move-center">
							<div class="col-md-4 py-2">
								<label>Comfirm New Password</label>
							</div>
							<div class="col-md-8">
								<input type="password" name="password2" class="form-control">
							</div>
						</div>
						<div class="row move-center">
							<div class="ml-auto">
								<input type="submit" name="submit" class="form-control btn btn-primary" value="Reset">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		
	</div>

	<?php require_once "templates/footer-pry.php" ?>
	

</body>
	<?php require_once "templates/footer-sec.php" ?>
	


</html>