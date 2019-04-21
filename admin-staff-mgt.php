<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	require_once "key.php";
	$error = '';
	if(isset($_SESSION['error-msg'])){
		unset($_SESSION['error-msg']);
		$error = '<div class="bg-danger text-white py-3">
					User already exists!!!
				</div>';
	}else{
		$error = '';
	}

	$success = '';
	if(isset($_SESSION['success'])){
		unset($_SESSION['success']);
		$success = '<div class="bg-success text-white py-3">
					Staff successfully added!!!
				</div>';
	}else{
		$success = '';
	}
?>
<body class="bg-light">
	<?php require_once "templates/menu.php"; ?>
	
	<section class="section">
		<div class="row">
			
			<div class="col-md-2 bg-primary sidebar">
				<div class="row">
					<div class="col pl-0">
						<aside>
							<?php require_once "templates/sidebar.php" ?>
						</aside>
					</div>
				</div>
			</div>
			<div class="col-md-10 pt-4">
				<div class="container">
					<div class="border-bottom row px-3">
						<h2 class="text-primary">STAFF MANAGEMENT</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
						<div><?php echo $error; ?></div>
						<div><?php echo $success; ?></div>
						<form method="POST" action="admin-staff-mgt-process" class="form-group">
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
									<label>Department:</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="department" id="department" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="ml-auto mr-auto col-md-3">
									<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="Add Staff">
								</div>
							</div>
						</form>
					</div>
					<div class="col-xl-6 col-md-12 col-sm-12 py-5">
						<?php require_once "admin-staff-mgt-table.php" ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			
		</div>
			
	</section>
	
	<div id="main" class="container">
		
	</div>
	<?php require_once "templates/footer-pry.php" ?>
</body>
	<?php require_once "templates/footer-sec.php" ?>
	


</html>