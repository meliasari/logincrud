<?php
	session_start();
	if(isset($_SESSION['admin'])){
		header('location: home.php');
	}
	include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="styles/css/bootstrap.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<h2>Login User</h2>
					<form method="post" action="proses_login.php">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-danger btn-block">LOGIN SEKARANG</button>
					</form>
				</div>
			</div>
		</div>

		<script src="styles/js/jquery-3.2.1.js"></script>
		<script src="styles/js/bootstrap.js"></script>
	</body>
</html>