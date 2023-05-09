<!doctype html>
<html lang="en">
<?php
include 'header.html';
?>

<head>
	<title>Tambah Data Dosen</title>
</head>
<br><br><br><br>
<body>	
	<div class="container-fluid">
		<div class="row">

	<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
    	<img src="assets/img/gambar2.png" class="img-fluid" alt="">
	</div>

	<div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">	Tambah Data Dosen</h1>
		<a class="btn btn btn-warning" href="dosen.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Dosen</label>
			<br>
			<input class="form-control" type="text" name="kodedosen">
			<br>
			<label>NIDN</label>
			<br>
			<input class="form-control" type="text" name="nidn">
			<br>
			<label>NIP</label>
			<br>
			<input class="form-control" type="text" name="nip">
			<br>
			<label>Nama Dosen</label>
			<br>
			<input class="form-control" type="text" name="namadosen">
			<br>
			<label>Kode Prodi</label>
			<br>
			<input class="form-control" type="text" name="kodeprodi">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_simpan_dosen">Submit</button>
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