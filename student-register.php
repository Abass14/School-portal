<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	require_once "key.php";

	$mechanical = "";
	$electrical = "";
	$user = $_SESSION['register'];
	$id = $user['id'];
	$query = "SELECT * FROM register where id = '{$user['id']}'";
	$result = mysqli_query($connect, $query);
	if ($result) {
		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
		if ($row[0]['department'] == 'mechanical') {
			$electrical = "";
			$mechanical = '
							<form method="POST" action="student-register.php" class="form-group border px-3">
								<div class="row move-center">
									<div class="col">
										<label class="py-3">Add Semester courses:</label>
									</div>
								</div>
								<div class="row border">
									<div class="col-xl-4">
										<input type="checkbox" name="MEE101" value="MEE 101">MEE 101 (2U)<br>
										<input type="checkbox" name="MEE102" value="MEE 102">MEE 102 (2U)<br>
										<input type="checkbox" name="MEE103" value="MEE 103">MEE 103 (2U)<br>
									</div>
									<div class="col-xl-4">
										<input type="checkbox" name="MEE101" value="MEE 104">MEE 104 (2U)<br>
										<input type="checkbox" name="MEE102" value="MEE 105">MEE 105 (2U)<br>
										<input type="checkbox" name="MEE103" value="MEE 106">MEE 106 (2U)<br>
									</div>
									<div class="col-xl-4">
										<input type="checkbox" name="MEE101" value="MEE 107">MEE 107 (2U)<br>
										<input type="checkbox" name="MEE102" value="MEE 108">MEE 108 (2U)<br>
										<input type="checkbox" name="MEE103" value="MEE 109">MEE 109 (2U)<br>
									</div>
								</div>
								<div class="row move-center">
									<div class="col-md-3">
										<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="Register">
									</div>
								</div>
							</form>
							';
		}elseif ($row[0]['department'] == 'electrical') {
			$mechanical = "";
			$electrical = '
							<form method="POST" action="" class="form-group border px-3">
								<div class="row move-center">
									<div class="col">
										<label class="py-3">Add Semester courses:</label>
									</div>
								</div>
								<div class="row border">
									<div class="col-xl-4">
										<input type="checkbox" name="ELE101" value="ELE 101">ELE 101 (2U)<br>
										<input type="checkbox" name="ELE102" value="ELE 102">ELE 102 (2U)<br>
										<input type="checkbox" name="ELE103" value="ELE 103">ELE 103 (2U)<br>
									</div>
									<div class="col-xl-4">
										<input type="checkbox" name="ELE101" value="ELE 104">ELE 104 (2U)<br>
										<input type="checkbox" name="ELE102" value="ELE 105">ELE 105 (2U)<br>
										<input type="checkbox" name="ELE103" value="ELE 106">ELE 106 (2U)<br>
									</div>
									<div class="col-xl-4">
										<input type="checkbox" name="ELE101" value="ELE 107">ELE 107 (2U)<br>
										<input type="checkbox" name="ELE102" value="ELE 108">ELE 108 (2U)<br>
										<input type="checkbox" name="ELE103" value="ELE 109">ELE 109 (2U)<br>
									</div>
								</div>
								<div class="row move-center">
									<div class="col-md-3">
										<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="Register">
									</div>
								</div>
							</form>
							';
		}else {
			$mechanical = "";
			$electrical = "";
		}
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
						<h2 class="text-primary">Register Course</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-md-12 col-sm-12 py-5 pl-5">
						<!-- <form method="POST" action="" class="form-group">
							<div class="row move-center">
								<div class="col-md-3">
									<label class="py-3">Department:</label>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="department">
										<option>Select</option>
										<option value="mechanical">Mechanical Engineering</option>
										<option value="electrical">Electrical Engineering</option>
									</select>
								</div>
							</div>
							<div class="row move-center">
								<div class="ml-auto mr-auto col-md-3">
									<input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="Register">
								</div>
							</div>
						</form> -->
						<?php 
							echo $mechanical; 
							echo $electrical;
						?>
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