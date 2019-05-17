<?php
	if(isset($_SESSION['register'])){
		require_once "connection.php";
		$menuPlus = '';
		$user = $_SESSION['register'];
		$query = "SELECT * from register where id = '{$user['id']}'";
		$result = mysqli_query($connect, $query);
		if($result){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			if($row[0]['authority'] == 'admin'){
				$menuPlus = '<a class="text-white sd-link" href="admin-staff-mgt.php"><li  id="sd-link4" id="sd-link" class="sd-item">STAFF MANAGEMENT</li></a>
					<a class="text-white sd-link" href="admin-department.php"><li id="sd-link3" id="sd-link" class="sd-item">DEPARTMENT</li></a>
					<a class="text-white sd-link" href="admin-student-result.php"><li id="sd-link1" id="sd-link" class="sd-item">STUDENT RESULT</li></a>';
				}elseif ($row[0]['authority'] == 'staff') {
					$menuPlus = '<a class="text-white sd-link" href=""><li  id="sd-link4" id="sd-link" class="sd-item">DEPARTMENT</li></a>
						<a class="text-white sd-link" href=""><li id="sd-link5" id="sd-link" class="sd-item">STUDENT RESULT</li></a>
						<a class="text-white sd-link" href=""><li  id="sd-link4" id="sd-link" class="sd-item">POST RESULT</li></a>';
				}elseif ($row[0]['authority'] == 'student') {
					$menuPlus = '
						<a class="text-white sd-link" href="student-register.php"><li  id="sd-link4" id="sd-link" class="sd-item">RESISTER COURSE</li></a>
						<a class="text-white sd-link" href="student-exam.php"><li id="sd-link5" id="sd-link" class="sd-item">SELECT EXAM</li></a>
						<a class="text-white sd-link" href="student-result"><li  id="sd-link4" id="sd-link" class="sd-item">CHECK RESULT</li></a>';

				}else{
					$menuPlus = '';
				}
			}
		$sidebar = '<div id="sd-bar" class="sd-bar">
						<ul class="ul-bar">
							<a class="text-white sd-link" href="home.php"><li id="sd-link1" id="sd-link" class="sd-item">HOME</li></a>';
		$sidebar .= $menuPlus;

		$sidebar .= '	
						<a class="text-white sd-link" href="logout.php"><li id="sd-link5" id="sd-link" class="sd-item">LOGOUT</li></a>
						<a class="text-white sd-link" href="#"><li id="sd-link6" id="sd-link" class="sd-item">HELP</li></a>
						</ul>
					</div>';

		echo $sidebar;

	}else{
		$sidebar = '<div id="sd-bar" class="sd-bar">
						<ul class="ul-bar">
							<a class="text-white sd-link" href="home.php"><li id="sd-link" class="sd-item">HOME</li></a>
							<a class="text-white sd-link" href="sign-up.php"><li id="sd-link2" id="sd-link" class="sd-item">REGISTRATION</li></a>
							<a class="text-white sd-link" href="logout.php"><li id="sd-link5" id="sd-link" class="sd-item">NEWS</li></a>
							<a class="text-white sd-link" href="#"><li id="sd-link6" id="sd-link" class="sd-item">HELP</li></a>
							</ul>
						</div>';
			echo $sidebar;
	}
?>
<!-- <script type="text/javascript" src="./script.js"></script> -->