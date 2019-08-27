<?php 
	require_once 'connection.php';
	$user = $_SESSION['register'];
	$Query = "SELECT * from register where id = '{$user['id']}'";;
	$result = mysqli_query($connect, $Query);

	
	if ($result) {
		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

		if ($row[0]['department'] == 'mechanical') {
			$queryMech = "SELECT * FROM `courses` WHERE department = 'mechanical'";
			$resultMech = mysqli_query($connect, $queryMech);

			$table = "<table border = '1' class ='table bg-primary border-light text-white text-center'>
						<tr>
							<th>Course</th>
							<th>Unit</th>
							<th>Select</th>
						</tr>
						";
			$form = "<form method='POST' action='student-select-course.php' class='form-group'>
						<input type='checkbox' name='studentSelect'>";
			while ($rows = mysqli_fetch_assoc($resultMech)) {
				
				$table .= "<tr>
								<td>{$rows['course']}</td>
								<td>{$rows['unit']}</td>
								<td>$form</td>
							</tr>
							";
				
			} 
			$form .= "
						<div class='row move-center'>
							<div class='ml-auto mr-auto'>
								<input type='submit' name='submit' class='form-control btn btn-primary' value='Submit'>
							</div>
						</div>
						</form>";
			
			$table .= "</table>";
			echo $table;
			echo $form;
		}elseif ($row[0]['department'] == 'electrical'){
			$queryElect = "SELECT * FROM `courses` WHERE department = 'electrical'";
			$resultElect = mysqli_query($connect, $queryElect);

			$table = "<table border = '1' class ='table bg-primary border-light text-white text-center'>
						<tr>
							<th>Course</th>
							<th>Unit</th>
							<th>Select</th>
						</tr>
						";
			while ($rows = mysqli_fetch_assoc($resultElect)) {
				$form = "<form method='POST' action='student-select-course.php' class='form-group'>
						<input type='checkbox' name='studentSelect'>";
				$table .= "<tr>
								<td>{$rows['course']}</td>
								<td>{$rows['unit']}</td>
								<td>$form</td>
							</tr>";
			}
			$form .= "
						<div class='row move-center'>
							<div class='ml-auto mr-auto'>
								<input type='submit' name='submit' class='form-control btn btn-primary' value='Submit'>
							</div>
						</div>
						</form>";

			$table .= "</table>";
			echo $table;
			echo $form;
		}

	}
?>