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

	<h1 class="text-center">Data Master Siswa</h1>

  <div class="col-md-4 col-md-offset-4">
    <table class="table">
      <thead>
          <th>nis</th>
          <th>nama</th>
          <th>kelas</th>
          <th>jurusan</th>
          <th>Aksi</th>
      </thead>
      <tbody>
        <?php
          $q = mysqli_query($con, "SELECT * from tbl_siswa");
          while($s = mysqli_fetch_assoc($q)):
        ?>
        <tr>
          <td><?=$s['nis']?></td>
          <td><?=$s['nama']?></td>
          <td><?=$s['kelas']?></td>
          <td><?=$s['jurusan']?></td>
          <td>
            <a href="edit.php?nis=<?=$s['nis']?>">Edit</a>
            <a href="proses_delete.php?nis=<?=$s['nis']?>">Hapus</a>
          </td>
        </tr>
      <?php endwhile ?>
      </tbody>
      <tfoot>
        <tr>
          <td class="text-center" colspan="5"><a href="create.php">TAMBAH SISWA</a></td>
        </tr>
      </tfoot>
    </table>
  </div>

		<script src="styles/js/jquery-3.2.1.js"></script>
		<script src="styles/js/bootstrap.js"></script>
</body>
</html>