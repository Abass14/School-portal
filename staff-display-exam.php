<?php
	require_once 'connection.php';
	$user = $_SESSION['register'];
	$query = "SELECT * FROM `Exam`";
	$query2 = "SELECT * from register where id = '{$user['id']}'";
	$result = mysqli_query($connect, $query);
	$result2 = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);
	if ($result) {
		$questions = "<div class='text-primary'>
						<h3>Attempt all qestions</h3>
						";
		while ($row = mysqli_fetch_assoc($result)) {
			// var_dump($row);
			// exit();
			$questions .= "
							<span>{$row['s/n']}.</span>&nbsp; &nbsp;<span>{$row['question']}</span>
								<form action='' method='POST' class='form-group pl-5'>
									<input type='radio' name='ans' value=''>&nbsp; &nbsp;{$row['a']}<br>
									<input type='radio' name='ans' value=''>&nbsp; &nbsp;{$row['b']}<br>
									<input type='radio' name='ans' value=''>&nbsp; &nbsp;{$row['c']}<br>
									<input type='radio' name='ans' value=''>&nbsp; &nbsp;{$row['d']}<br>
								</form>
								";
		}

		$questions .= "
						<input type='submit' name='submit' value='Submit' class='form-control btn btn-primary col-md-4'>
						</div>
						";
		echo $questions;
	}
?>