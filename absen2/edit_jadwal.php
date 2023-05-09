<?php
include 'header.html';
$id = $_GET['id'];
include 'model.php'; 
$model = new Model();
$data = $model->edit_jadwal($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Jadwal Kuliah</title>
</head>
<br><br><br><br>
<body>		
	<div class="container-fluid">
		<div class="row">

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/gambar3.png" class="img-fluid" alt="">
	</div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
		<h1 align="center">Edit Jadwal Kuliah</h1>
		<a class="btn btn btn-warning" href="jadwal.php">Kembali</a>
		<br><br>
		<form align="center" action="proses.php" method="post">
			<label>ID</label>
			<br>
			<input class="form-control" type="number" name="id" value="<?php echo $data->id ?>">
			<br>
			<label>Jadwal ID</label>
			<br>
			<input class="form-control" type="number" name="jadwalid" value="<?php echo $data->jadwalid ?>">
			<br>
			<label>Kode Dosen</label>
			<br>
			<input class="form-control" type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
			<br>
			<label>Hari</label>
			<br>
			<input class="form-control" type="text" name="hari" value="<?php echo $data->hari ?>">
			<br>
			<label>Tahun Akademik</label>
			<br>
			<input class="form-control" type="text" name="thnakademik" value="<?php echo $data->thnakademik ?>">
			<br>
			<label>Semester</label>
			<br>
			<input class="form-control" type="text" name="semester" value="<?php echo $data->semester ?>">
			<br>
			<label>Kode Matakuliah</label>
			<br>
			<input class="form-control" type="text" name="kodemk" value="<?php echo $data->kodemk ?>">
			<br>
			<label>Sesi</label>
			<br>
			<input class="form-control" type="text" name="sesi" value="<?php echo $data->sesi ?>">
			<br>
			<label>Jam Masuk</label>
			<br>
			<input class="form-control" type="time" name="jammasuk" value="<?php echo $data->jammasuk ?>">
			<br>
			<label>Jam Keluar</label>
			<br>
			<input class="form-control" type="time" name="jamkeluar" value="<?php echo $data->jamkeluar ?>">
			<br>
			<label>Kelas</label>
			<br>
			<input class="form-control" type="text" name="kelas" value="<?php echo $data->kelas ?>">
			<br>
			<label>Ruang</label>
			<br>
			<input class="form-control" type="text" name="ruang" value="<?php echo $data->ruang ?>">
			<br>
			<label>Status</label>
			<br>
			<input class="form-control" type="number" name="status" value="<?php echo $data->status ?>">
			<br>	
			<label>Kelas Sesi</label>
			<br>
			<input class="form-control" type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>">
			<br><br>
			<button class="btn btn btn-info" type="submit" name="submit_edit_jadwal">Submit</button>
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