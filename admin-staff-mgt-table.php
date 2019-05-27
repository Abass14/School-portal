<?php
	require_once "connection.php";

	$query = "SELECT * from register where authority = 'staff'";
	$result = mysqli_query($connect, $query);
	// var_dump($result);
	if($result){
		$table = "<table border = '1' class = 'table table-responsive text-white bg-primary staff-table'>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>EMAIL</th>
						<th>PHONE</th>
						<th>DEPARTMENT</th>
						<th>DELETE</th>
					</tr>
					";
				while ($row = mysqli_fetch_assoc($result)) {
					$table .= "<tr>
									<td>{$row['id']}</td>
									<td>{$row['name']}</td>
									<td>{$row['email']}</td>
									<td>{$row['phone']}</td>
									<td>{$row['department']}</td>
									<td><button class = 'bg-danger'><a href='admin-staff-mgt-delete.php?id={$row['id']}' class = 'text-white'>Delete</a></button></td>
								</tr>";				
					}

		$table .= "</table>";
		echo $table;
	}


?>