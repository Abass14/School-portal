<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	require_once "key.php";
	
	// $examError = "";
	$examSuccess = "";
	$examquestions = "";

	// if (isset($_SESSION['examError']) && $_SESSION['examError']){
	// 	unset($_SESSION['examError']);
	// 	$examError = "
	// 					<div class='bg-danger text-white py-3 px-5'>
	// 						Duplicate Question!!!
	// 					</div>
	// 				";
	// }else{
	// 	$examError = "";
	// }

	if (isset($_SESSION['examSuccess']) && $_SESSION['examSuccess']){
		unset($_SESSION['examSuccess']);
		$examSuccess = "
						<div class='bg-success text-white py-3 px-5'>
							Question successfully posted!!!
						</div>

						";
	}else{
		$examSuccess = "";
	}

	// if (isset($_SESSION['examSuccess']) && $_SESSION['examSuccess']) {
	// $examquestions = $_SESSION['questions'];
	// unset($_SESSION['questions']);
	// }else {
	// 	$examquestions = "";
	// }
?>
<body class="bg-light">
	<?php require_once "templates/menu.php"; ?>
	
	<section class="section">
		<div class="row">
			
			<div class="col-xl-2 col-md-12 col-sm-12 bg-primary sidebar">
				<div class="row">
					<div class="col pl-0">
						<aside>
							<?php require_once "templates/sidebar.php" ?>
						</aside>
					</div>
				</div>
			</div>
			<div class="col-xl-10 px-5 col-md-12 col-sm-12 pt-4">
				<div class="container">
					<div class="border-bottom row px-3">
						<h2 class="text-primary">POST EXAM QUESTIONS</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
						<form method="POST" action="staff-post-exam-process.php" class="form-group">
							<div>
								<?php 
									echo $examSuccess; 
									// echo $examError;
								?>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="" class="py-3">Department</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<select class="form-control" name="department">
										<option value="mechanical">Mechanical</option>
										<option value="electrical">Electrical</option>
									</select>
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="course" class="py-3">Course</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<input type="text" name="course" class="form-control" placeholder="Enter Course Code">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="sn" class="py-3">S/N</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<input type="number" name="sn" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="question" class="py-3">Question</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<textarea class="form-control" name="question"></textarea>
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="option" class="py-3">Option A</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<input type="text" name="optionA" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="option" class="py-3">Option B</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<input type="text" name="optionB" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="option" class="py-3">Option C</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<input type="text" name="optionC" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="option" class="py-3">Option D</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<input type="text" name="optionD" class="form-control">
								</div>
							</div>
							<div class="row move-center">
								<div class="col-md-3 col-sm-12">
									<label for="option" class="py-3">Answer</label>
								</div>
								<div class="col-md-9 col-sm-12">
									<select class="form-control" name="answer">
										<option value="">Select--</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
										<option value="D">D</option>
									</select>
								</div>
							</div>
							<div class="row move-center">
								<div class="ml-auto mr-auto">
									<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="Post Question">
								</div>
							</div>
						</form>
					</div>
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
						<?php require_once 'staff-display-exam.php'; ?>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<div id="main" class="container">
		
	</div>
	<?php require_once "templates/footer-pry.php" ?>
</body>
	<?php require_once "templates/footer-sec.php" ?>
	


</html>