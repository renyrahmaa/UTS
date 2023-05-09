<?php
include 'header.html';
$id = $_GET['kodeprodi'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_prodi($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Program Studi</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
		<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/gambar5.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Data Program Studi</h1>
		<a class="btn btn btn-warning" href="prodi.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>Kode Program Studi</label>
			<br>
			<input class="form-control" type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
			<br>
			<label>Nama Program Studi</label>
			<br>
			<input class="form-control" type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_prodi">Submit</button>
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