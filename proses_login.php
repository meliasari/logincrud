<?php
	
	session_start();

	include 'koneksi.php';

	$usr = $_POST['user'];
	$psw = md5($_POST['pass']);

	$querylogin = mysqli_query($con, "SELECT * FROM tbl_user WHERE username='$usr' AND password='$psw'");
	$val        = mysqli_num_rows($querylogin);

	if ($val>0) {
		$_SESSION['admin'] = 'Administrator';

		header('location: home.php');
	} else {
		echo "GAGAL LOGIN";
	}
	

?>