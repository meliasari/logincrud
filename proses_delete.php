<?php
	
	session_start();

	include 'koneksi.php';

	$nis  = $_GET['nis'];

	$querylogin = mysqli_query($con, "DELETE FROM tbl_siswa WHERE nis=$nis");

	if ($querylogin) {
		header('location: master.php');
	} else {
		echo "GAGAL HAPUS DATA";
	}
	

?>