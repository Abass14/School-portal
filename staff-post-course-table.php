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
							<th>ID</th>
							<th>Course</th>
							<th>Unit</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
						";
			while ($rows = mysqli_fetch_assoc($resultMech)) {
				$table .= "<tr>
								<td>{$rows['id']}</td>
								<td>{$rows['course']}</td>
								<td>{$rows['unit']}</td>
								<td><a href='staff-course-delete.php' class='btn text-danger'><i class='fas fa-trash-alt'></i></a></td>
								<td><a href='staff-course-edit.php?id={$rows['id']}' class='btn btn-secondary text-white'><i class='fas fa-pen'></i></a></td>
							</tr>
							";
				
			} 

			$table .= "</table>";
			echo $table;
		}elseif ($row[0]['department'] == 'electrical'){
			$queryElect = "SELECT * FROM `courses` WHERE department = 'electrical'";
			$resultElect = mysqli_query($connect, $queryElect);

			$table = "<table border = '1' class ='table bg-primary border-light text-white text-center'>
						<tr>
							<th>ID</th>
							<th>Course</th>
							<th>Unit</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
						";
			while ($rows = mysqli_fetch_assoc($resultElect)) {
				$table .= "<tr>
								<td>{$rows['id']}</td>
								<td>{$rows['course']}</td>
								<td>{$rows['unit']}</td>
								<td><a href='staff-course-delete.php' class='btn text-danger'><i class='fas fa-trash-alt'></i></a></td>
								<td><a href='staff-course-edit.php?id={$rows['id']}' class='btn btn-secondary text-white'><i class='fas fa-pen'></i></a></td>
							</tr>";
			}
			$table .= "</table>";
			echo $table;
		}

	}

			
?>