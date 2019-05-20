<?php
	if(isset($_SESSION['register'])){
		require_once "connection.php";
		$menuPlus = '';
		$user = $_SESSION['register'];
		$id = $user['id'];
		$query = "SELECT * from register where id = '{$user['id']}'";
		$result = mysqli_query($connect, $query);
		if($result){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			if($row[0]['authority'] == 'admin'){
				$menuPlus = '<li><a href="admin-staff-mgt.php" class="link-menu">Staff Management</a></li>
							<li><a href="admin-department.php" class="link-menu">Department</a></li>
							<li><a href="admin-student-result.php" class="link-menu">Student Result</a></li>';
			}elseif ($row[0]['authority'] == 'staff') {
				$menuPlus = '<li><a href="staff-department.php" class="link-menu">Department</a></li>
							<li><a href="sign-up.php" class="link-menu">Student Result</a></li>
							<li><a href="login.php" class="link-menu">Post Result</a></li>
							<li><a href="staff-post-exam.php" class="link-menu">Post Exam</a></li>';
			}elseif ($row[0]['authority'] == 'student') {
				$menuPlus = '<li><a href="index.php" class="link-menu">Register Course</a></li>
							<li><a href="login.php" class="link-menu">Select Exam</a></li>
							<li><a href="login.php" class="link-menu">Check Result</a></li>
							';
			}else{
				$menuPlus = '';
			}

			if($row[0]['authority'] == 'admin' || 'staff' || 'student'){
				$upMenu = '<li><a href="logout.php" class="link-menu">Logout</a></li>
							<li><a href="forgot-password.php" class="link-menu">Change password</a></li>'
									;
				// echo $upMenu;
			}else{
				$upMenu = '';
			}
		}

		$collapseMenu = '<div id="sd-menu" class="sd-nav">
							<span><i class="fas fa-user icon"></i></span>
							<span>User</span>
							<a href="#" class="close" onclick="closeSlideMenu()">&times;</a>
							<a href="home.php">Home</a>
							<a href="forgot-password.php">Chnage Password</a>';
		$collapseMenu .= $menuPlus;

		$collapseMenu .= '<a href="logout.php">Logout</a>
							<a href="#">Help</a>
						</div>';
		echo $collapseMenu;

		$menu = '<nav class="nav-bar">
						<span class="icon-slide"><a class="a-icon" href="#" onclick="openSlideMenu()" id="side"><i class="fas fa-bars"></i></a></span>
						<ul class="ul-nav">
							<li><a href="index.php" class="link-menu">Home</a></li>';
		$menu .= $upMenu;

		$menu .= '<li><a href="#" class="link-menu">Help</a></li>
						</ul>
						<ul class="dates">
							<li id="dates"></li>
						</ul>
					</nav>';

		echo $menu;
	}else{
		$collapseMenu = '<div id="sd-menu" class="sd-nav">
							<span><i class="fas fa-user icon"></i></span>
							<span>User</span>
							<a href="#" class="close" onclick="closeSlideMenu()">&times;</a>
							<a href="home.php">Home</a>
							<a href="sign-up.php">Registration</a>
							<a href="login.php">Login</a>
							<a href="logout.php">Logout</a>
							<a href="#">Help</a>
						</div>';
		echo $collapseMenu;

		$menu = '<nav class="nav-bar">
						<span class="icon-slide"><a class="a-icon" href="#" onclick="openSlideMenu()" id="side"><i class="fas fa-bars"></i></a></span>
						<ul class="ul-nav">
							<li><a href="index.php" class="link-menu">Home</a></li>
							<li><a href="sign-up.php" class="link-menu">Student Registration</a></li>
							<li><a href="login.php" class="link-menu">Login</a></li>
							<li><a href="#" class="link-menu">Help</a></li>
						</ul>
						<ul class="dates">
							<li id="dates"></li>
						</ul>
					</nav>';
		echo $menu;
	}

?>

<!-- <nav class="nav-bar">
	<span class="icon-slide"><a class="a-icon" href="#" onclick="openSlideMenu()" id="side"><i class="fas fa-bars"></i></a></span>
	<ul class="ul-nav">
		<li><a href="index.php" class="link-menu">Home</a></li>
		<li><a href="sign-up.php" class="link-menu">Student Registration</a></li>
		<li><a href="login.php" class="link-menu">Login</a></li>
		<li><a href="#" class="link-menu">Help</a></li>
	</ul>
	<ul class="dates">
		<li id="dates"></li>
	</ul>
</nav> -->





