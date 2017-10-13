<?php
	session_start();
	if(!isset($_SESSION['admin'])){
	header('location: index.php');
	}

  include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Master Siswa</title>
	<link rel="stylesheet" href="styles/css/bootstrap.css">
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CRUD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="master.php">Data Master</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">keluar</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<h1 class="text-center">Edit Data Siswa</h1>

  <div class="col-md-4 col-md-offset-4">
        <?php
          $nis  = $_GET['nis'];
          $q = mysqli_query($con, "SELECT * from tbl_siswa WHERE nis=$nis");
          while($s = mysqli_fetch_assoc($q)):
        ?>
          <form method="post" action="proses_update.php">
            <div class="form-group">
              <label>Nama</label>
              <input type="hidden" name="nis" class="form-control" placeholder="NIS" value="<?=$s['nis']?>" readonly="" >
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?=$s['nama']?>">
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="<?=$s['kelas']?>">
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?=$s['jurusan']?>">
            </div>
            <button type="submit" class="btn btn-danger btn-block">UPDATE DATA</button>
          </form>
        <?php endwhile ?>
  </div>

		<script src="styles/js/jquery-3.2.1.js"></script>
		<script src="styles/js/bootstrap.js"></script>
</body>
</html>