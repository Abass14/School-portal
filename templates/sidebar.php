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
				$menuPlus = '<a class="text-white sd-link" href="admin-staff-mgt.php"><li onmouseover="changeColor4()" onmouseleave="reverseColor4()" id="sd-link4" id="sd-link" class="sd-item">Staff Management</li></a>
					<a class="text-white sd-link" href="admin-department.php"><li onmouseover="changeColor3()" onmouseleave="reverseColor3()" id="sd-link3" id="sd-link" class="sd-item">Department</li></a>
					<a class="text-white sd-link" href="admin-student-result.php"><li onmouseover="changeColor1()" onmouseleave="reverseColor1()" id="sd-link1" id="sd-link" class="sd-item">Student Result</li></a>';
				}elseif ($row[0]['authority'] == 'staff') {
					$menuPlus = '<a class="text-white sd-link" href=""><li onmouseover="changeColor4()" onmouseleave="reverseColor4()" id="sd-link4" id="sd-link" class="sd-item">Department</li></a>
						<a class="text-white sd-link" href=""><li onmouseover="changeColor5()" onmouseleave="reverseColor5()" id="sd-link5" id="sd-link" class="sd-item">Student Result</li></a>
						<a class="text-white sd-link" href=""><li onmouseover="changeColor4()" onmouseleave="reverseColor4()" id="sd-link4" id="sd-link" class="sd-item">Post Result</li></a>';
				}elseif ($row[0]['authority'] == 'student') {
					$menuPlus = '
						<a class="text-white sd-link" href=""><li onmouseover="changeColor4()" onmouseleave="reverseColor4()" id="sd-link4" id="sd-link" class="sd-item">Resgister Course</li></a>
						<a class="text-white sd-link" href=""><li onmouseover="changeColor5()" onmouseleave="reverseColor5()" id="sd-link5" id="sd-link" class="sd-item">Select Exam</li></a>
						<a class="text-white sd-link" href=""><li onmouseover="changeColor4()" onmouseleave="reverseColor4()" id="sd-link4" id="sd-link" class="sd-item">Check Result</li></a>';

				}else{
					$menuPlus = '';
				}
			}
		$sidebar = '<div id="sd-bar" class="sd-bar">
						<ul class="ul-bar">
							<a class="text-white sd-link" href="home.php"><li onmouseover="changeColor()" onmouseleave="reverseColor1()" id="sd-link1" id="sd-link" class="sd-item">Home</li></a>';
		$sidebar .= $menuPlus;

		$sidebar .= '	
						<a class="text-white sd-link" href="logout.php"><li onmouseover="changeColor5()" onmouseleave="reverseColor5()" id="sd-link5" id="sd-link" class="sd-item">LOGOUT</li></a>
						<a class="text-white sd-link" href="#"><li onmouseover="changeColor6()" onmouseleave="reverseColor6()" id="sd-link6" id="sd-link" class="sd-item">HELP</li></a>
						</ul>
					</div>';

		echo $sidebar;

	}else{
		$sidebar = '<div id="sd-bar" class="sd-bar">
						<ul class="ul-bar">
							<a class="text-white sd-link" href="home.php"><li onmouseover="changeColor()" onmouseleave="reverseColor1()" id="sd-link1" id="sd-link" class="sd-item">Home</li></a>
							<a class="text-white sd-link" href="sign-up.php"><li onmouseover="changeColor2()" onmouseleave="reverseColor2()" id="sd-link2" id="sd-link" class="sd-item">REGISTRATION</li></a>
							<a class="text-white sd-link" href="logout.php"><li onmouseover="changeColor5()" onmouseleave="reverseColor5()" id="sd-link5" id="sd-link" class="sd-item">LOGOUT</li></a>
							<a class="text-white sd-link" href="#"><li onmouseover="changeColor6()" onmouseleave="reverseColor6()" id="sd-link6" id="sd-link" class="sd-item">HELP</li></a>
							</ul>
						</div>';
			echo $sidebar;
	}
?>
<script type="text/javascript" src="./script.js"></script>