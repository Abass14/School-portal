<?php
	require_once "templates/head.php";
	require_once 'connection.php';
	require_once 'key.php';

	$d = $_GET['id'];
	$query = "SELECT * FROM `courses` WHERE id = $d";
	$result = mysqli_query($connect, $query);
	

	if ($result) {
		
		// var_dump($d);
		// exit();
		while ($row = mysqli_fetch_assoc($result)) {
			$form = "<form action='staff-edit-course-process.php?id={$row['id']}' method='POST'>";
		}
		$form .= "<div class='row move-center'>
						<div class='col-md-3 col-sm-12'>
							<label for='dept' class='py-3'>Department</label>
						</div>
						<div class='col-md-9 col-sm-12'>
							<select class='form-control' name='dept'>
								<option value='mechanical'>Mechanical</option>
								<option value='electrica''>Electrical</option>
							</select>
						</div>
					</div>
					<div class='row move-center'>
						<div class='col-md-3 col-sm-12'>
							<label for='courseCode' class='py-3'>Course</label>
						</div>
						<div class='col-md-9 col-sm-12'>
							<input type='text' name='courseCode' class='form-control' placeholder='Enter Course Code'>
						</div>
					</div>
					<div class='row move-center'>
						<div class='col-md-3 col-sm-12'>
							<label for='unit' class='py-3'>Course Unit</label>
						</div>
						<div class='col-md-9 col-sm-12'>
							<input type='number' name='unit' class='form-control' placeholder='Enter Course Unit'>
						</div>
					</div>
						<div class='row move-center'>
						<div class='ml-auto mr-auto'>
							<input type='submit' name='submit' class='form-control btn btn-primary' value='Post Course'>
						</div>
					</div>
					</form>
				";
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
						<h2 class="text-primary">EDIT COURSES</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
						<?php 
							echo $form; 
						?>
					</div>
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
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