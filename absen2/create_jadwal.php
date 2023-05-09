<!doctype html>
<html lang="en">
<?php
include 'header.html';
?>

<head>
	<title>Tambah Jadwal Kuliah</title>
</head>
<br><br><br><br>
<body>	
	<div class="container-fluid">
		<div class="row">	

	<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
    	<img src="assets/img/gambar3.png" class="img-fluid" alt="">
	</div>

	<div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">	Tambah Jadwal Kuliah</h1>
		<a class="btn btn btn-warning" href="jadwal.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>ID</label>
			<br>
			<input class="form-control" type="number" name="id">
			<br>
			<label>Jadwal ID</label>
			<br>
			<input class="form-control" type="number" name="jadwalid">
			<br>
			<label>Kode Dosen</label>
			<br>
			<input class="form-control" type="text" name="kodedosen">
			<br>
			<label>Hari</label>
			<br>
			<input class="form-control" type="text" name="hari">
			<br>
			<label>Tahun Akademik</label>
			<br>
			<input class="form-control" type="text" name="thnakademik">
			<br>
			<label>Semester</label>
			<br>
			<input class="form-control" type="text" name="semester">
			<br>
			<label>Kode Matakuliah</label>
			<br>
			<input class="form-control" type="text" name="kodemk">
			<br>
			<label>Sesi</label>
			<br>
			<input class="form-control" type="text" name="sesi">
			<br>
			<label>Jam Masuk</label>
			<br>
			<input class="form-control" type="time" name="jammasuk">
			<br>
			<label>Jam Keluar</label>
			<br>
			<input class="form-control" type="time" name="jamkeluar">
			<br>
			<label>Kelas</label>
			<br>
			<input class="form-control" type="text" name="kelas">
			<br>
			<label>Ruang</label>
			<br>
			<input class="form-control" type="text" name="ruang">
			<br>
			<label>Status</label>	
			<br>
			<input class="form-control" type="number" name="status">
			<br>
			<label>Kelas Sesi</label>
			<br>
			<input class="form-control" type="text" name="kelassesi">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_simpan_jadwal">Submit</button>
			<button class="btn btn btn-danger" type="reset">Reset</button>
		</form>
			<div data-aos="fade-up" data-aos-delay="600">
       			<div class="text-center text-lg-start">
	
				</div>
			</div>
	</div>
	<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>

		</div>
	</div>	
</body>
<?php
include 'footer.html';
?>
</html>