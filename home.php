<?php 
	require_once "templates/head.php";
	require_once "connection.php";
	require_once "key.php";
?>
<body class="bg-light">
	<?php require_once "templates/menu.php"; ?>
	
	<section class="section">
		<div class="row">
			
			<div class="col-md-2 bg-primary sidebar">
				<div class="row">
					<div class="col pl-0">
						<aside>
							<?php require_once "templates/sidebar.php" ?>
						</aside>
					</div>
				</div>
			</div>
			<div class="col-md-10 pt-4">
				<div class="container">
					<div class="border-bottom row px-3">
						<h2 class="text-primary">HOME</h2>
					</div>
					<div class="row px-3">
						<h4 class="pt-5 text-danger">RETURNING STUDENTS INSTRUCTIONS FOR 2018/2019 SESSION</h4>
						
					</div>
					<div class="row pt-3 px-3">
						<ul>
							<li>Students Register on the Portal</li>
							<li>Students LOGIN on the Portal</li>
							<li>Students Pay the University Fees</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div id="main" class="container">
		
	</div>
	<?php require_once "templates/footer-pry.php" ?>
</body>
	<?php require_once "templates/footer-sec.php" ?>
	


</html>