<?php 
	// require_once "templates/head.php";
	require_once "connection.php";
	// require_once "key.php";
	$content = "";
	$user = $_SESSION['register'];
	$query = "SELECT * from register where id = '{$user['id']}'";
	$result = mysqli_query($connect, $query);
	if($result) {
		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
		if($row[0]['department'] == 'mechanical') {
			$contentPlus = "
						<h3>Department Mechanical Engineering</h3>
							<hr>
							<h4>Lists of Mechanical Engineering courses</h4>
							<ul>
								<li>MEE101</li>
								<li>MEE102</li>
								<li>MEE103</li>
								<li>MEE104</li>
								<li>MEE105</li>
								<li>MEE106</li>
								<li>MEE107</li>
							</ul>
						";
		}elseif($row[0]['department'] == 'electrical'){
			$contentPlus = "
						<h3>Department Electrical Engineering</h3>
							<hr>
							<h4>Lists of Electrical Engineering courses</h4>
							<ul>
								<li>EEE101</li>
								<li>EEE102</li>
								<li>EEE103</li>
								<li>EEE104</li>
								<li>EEE105</li>
								<li>EEE106</li>
								<li>EEE107</li>
							</ul>
						";
		}else{
			$contentPlus = "";
		}

		$content = "<div class='row text-primary'>";

		$content .= $contentPlus;

		$content .=	"</div>
						<a href='staff-post-exam.php' class='btn btn-outline-primary'>Post student exams</a>";
		echo $content;
	}else{
		$content = "Access Denied";
		echo $content;
	}
?>