<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	require_once "key.php";
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
						<h2 class="text-primary">Results</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
						<form method="POST" action="" class="form-group">
							<div class="row move-center">
								<!-- <div class="col-md-3">
									<label class="py-3">Department:</label>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="department">
										<option>Select</option>
										<option value="mechanical">Mechanical Engineering</option>
										<option value="electrical">Electrical Engineering</option>
									</select>
								</div> -->
							</div>
							<div class="row move-center">
								<!-- <div class="ml-auto mr-auto col-md-3">
									<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="Register">
								</div> -->
							</div>
						</form>
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