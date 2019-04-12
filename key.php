<?php
	// session_start();
	if(!isset($_SESSION['register'])){
		header('location:login.php');
		exit;
	}

?>