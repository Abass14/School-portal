<?php 
	require_once "templates/head.php";
?>
<body class="bg-light">
	<?php require_once "templates/menu.php" ?>
	<div id="main">
		
	</div>
	<section class="pb-3">
		<div id="">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 center-div border p-4 text-primary">
						<h2 class="text-center py-3">Register Here</h2>
						<form method="POST" action="signup-process.php" class="form-group">
							<div class="row move-center">
								<div class="col-md-3">
									<label>Full Name:</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="name" id="name" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3">
									<label>Email:</label>
								</div>
								<div class="col-md-9">
									<input type="email" name="email" id="email" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3">
									<label>Phone:</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="phone" id="phone" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3">
									<label>Password:</label>
								</div>
								<div class="col-md-9">
									<input type="password" name="password" id="password" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<!-- <div class="py-3">
									<span><a href="forgot-password.php">Forgot password?</a></span>
								</div> -->
								<div class="ml-auto mr-auto col-md-3">
									<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" onclick="validate()"  value="Register">
								</div>
							</div>
							<div class="text-danger text-center">
								<span><small>Atleast one Uppercase, lowercase and a <br>number is required for password</small></span>
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