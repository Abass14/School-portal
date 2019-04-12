<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	$theUrl = '';

	if(isset($_SESSION['url']) && $_SESSION['url']){
		// unset($_SESSION['url']);
		$url = $_SESSION['url'];
		$theUrl .= "<div class= 'url'>
						Your password reset link is: $url

					</div>";
	}else{
		$theUrl .= '';
	}
	
?>
<body class="bg-light">
	<?php require_once "templates/menu.php" ?>

	<div id="main">
		
	</div>
	<div id="">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 center-div border my-5 p-4 text-primary">
					<h2 class="text-center py-3">Forgot password?<small class="px-2">Submit email</small></h2>
					<?php echo $theUrl; ?>
					<form method="POST" action="forgot-password-process.php" class="form-group">
						<div class="row move-center">
							<div class="col-md-2 py-2">
								<label>Email</label>
							</div>
							<div class="col-md-10">
								<input type="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row move-center">
							<div class="ml-auto">
								<input type="submit" name="submit" class="form-control btn btn-primary" value="Send">
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