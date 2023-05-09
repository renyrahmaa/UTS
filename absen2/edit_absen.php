<?php
include 'header.html';
$id = $_GET['idabsen'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_absen($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Absen Mahasiswa</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
	<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/gambar1.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Absen Mahasiswa</h1>
		<a class="btn btn btn-warning" href="absen.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>ID Absen</label>
			<br>
			<input class="form-control" type="number" name="idabsen" value="<?php echo $data->idabsen ?>">
			<br>
			<label>Tanggal Absen</label>
			<br>
			<input class="form-control" type="date" name="tglabsen" value="<?php echo $data->tglabsen ?>">
			<br>
			<label>Jam Masuk</label>
			<br>
			<input class="form-control" type="time" name="masuk" value="<?php echo $data->masuk ?>">
			<br>
			<label>Jam Keluar</label>
			<br>
			<input class="form-control" type="time" name="keluar" value="<?php echo $data->keluar ?>">
			<br>
			<label>Kode Dosen</label>
			<br>
			<input class="form-control" type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
			<br>
			<label>Sesi</label>
			<br>
			<input class="form-control" type="text" name="sesi" value="<?php echo $data->sesi ?>">
			<br>
			<label>Kelas Sesi</label>
			<br>
			<input class="form-control" type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_absen">Submit</button>
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