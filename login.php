<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	$loginfailed = "";
	if(isset($_SESSION['loginfailed']) && $_SESSION['loginfailed']){
		unset($_SESSION['loginfailed']);
		$loginfailed = "
			<div class='alert alert-danger text-center row'>
				Login Failed
			</div><br/>
		";
	}

	$passwordChange = '';
	if(isset($_SESSION['msg']) && $_SESSION['msg']){
		unset($_SESSION['msg']);
		$passwordChange = "<div class='bg-success text-white py-3 px-2'>
								Password changed successfully
							</div>";
	}
?>

<body class="bg-light">
	<?php require_once "templates/menu.php" ?>

	<div id="main">
		
	</div>
	<section class="log-section">
		<div id="" class="py">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 center-div border p-4 text-primary">
						
						<h2 class="text-center py-3">Sign In</h2>
						<?php  
							echo $loginfailed;
							echo $passwordChange;
						?>
						<form method="POST" action="login-process.php" class="form-group">
							<div class="row move-center">
								<div class="col-md-4 py-2">
									<label>Matric No</label>
								</div>
								<div class="col-md-8">
									<input type="text" name="matric" id="matric" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-4 py-2">
									<label>Password</label>
								</div>
								<div class="col-md-8">
									<input type="password" name="password" id="password" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="py-3">
									<span><a class="text-danger" href="forgot-password.php">Forgot password?</a></span>
								</div>
								<div class="ml-auto">
									<input type="submit" name="submit" onclick="validates()" id="submit" class="form-control btn btn-primary" value="Login">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
		</div>
	</section>
	

	<?php require_once "templates/footer-pry.php" ?>
	

</body>
	<?php require_once "templates/footer-sec.php" ?>
	


</html>