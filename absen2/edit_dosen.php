<?php
include 'header.html';
$id = $_GET['kodedosen'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_dosen($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Dosen</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
		<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/gambar2.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Data Dosen</h1>
		<a class="btn btn btn-warning" href="dosen.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Dosen</label>
			<br>
			<input class="form-control" type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
			<br>
			<label>NIDN</label>
			<br>
			<input class="form-control" type="text" name="nidn" value="<?php echo $data->nidn ?>">
			<br>
			<label>NIP</label>
			<br>
			<input class="form-control" type="text" name="nip" value="<?php echo $data->nip ?>">
			<br>
			<label>Nama Dosen</label>
			<br>
			<input class="form-control" type="text" name="namadosen" value="<?php echo $data->namadosen ?>">
			<br>
			<label>Kode Prodi</label>
			<br>
			<input class="form-control" type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_dosen">Submit</button>
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