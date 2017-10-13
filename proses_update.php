<?php
	
	session_start();

	include 'koneksi.php';

	$nis  = $_POST['nis'];
	$nm  = $_POST['nama'];
	$kls = $_POST['kelas'];
	$jrs = $_POST['jurusan'];

	$querylogin = mysqli_query($con, "UPDATE tbl_siswa SET nama='$nm', kelas='$kls', jurusan='$jrs' WHERE nis=$nis");

	if ($querylogin) {
		header('location: master.php');
	} else {
		echo "GAGAL UPDATE DATA";
	}
	

?>