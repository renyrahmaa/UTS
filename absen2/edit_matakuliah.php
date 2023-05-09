<?php
include 'header.html';
$id = $_GET['kodemk'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_matakuliah($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Matakuliah</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
		<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/gambar4.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Data  Matakuliah</h1>
		<a class="btn btn btn-warning" href="matakuliah.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Matakuliah</label>
			<br>
			<input class="form-control" type="text" name="kodemk" value="<?php echo $data->kodemk ?>">
			<br>
			<label>Nama Matakuliah</label>
			<br>
			<input class="form-control" type="text" name="namamk" value="<?php echo $data->namamk ?>">
			<br>
			<label>SKS</label>
			<br>
			<input class="form-control" type="number" name="sks" value="<?php echo $data->sks ?>">
			<br>
			<label>Semester</label>
			<br>
			<input class="form-control" type="number" name="smt" value="<?php echo $data->smt ?>">
			<br>
			<label>Kode Program Studi</label>
			<br>
			<input class="form-control" type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_matakuliah">Submit</button>
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