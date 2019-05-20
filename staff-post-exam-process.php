<?php
	require_once 'connection.php';

	$department = $_POST['department'];
	$course = $_POST['course'];
	$sn = $_POST['sn'];
	$question = $_POST['question'];
	$optionA = $_POST['optionA'];
	$optionB = $_POST['optionB'];
	$optionC = $_POST['optionC'];
	$optionD = $_POST['optionD'];
	$answer = $_POST['answer'];

	$query = "SELECT * FROM `Exam` WHERE question = '$question'";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);

	// if ($num) {
	// 	header('Location:staff-post-exam');
	// 	$_SESSION['examError'] = true;
	// }else{
	
	if ($result) {
		$insert = "INSERT INTO `Exam`(`s/n`, `department`, `course`, `question`, `a`, `b`, `c`, `d`, `answer`) VALUES ('$sn','$department','$course','$question','$optionA','$optionB','$optionC','$optionD','$answer')";
		mysqli_query($connect, $insert);
		$_SESSION['examSuccess'] = true;
		while ($row = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
			$exam['department'] = $row[0]['department'];
			$_SESSION['department'] = $exam;
			// var_dump($exam);
		}
		header('Location:staff-post-exam');
	}
	
	
	
?>