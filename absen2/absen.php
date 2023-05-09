<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Absen Mahasiswa</title>
</head>
<br><br><br><br>
<body align="center">
	<div align="center" class="container-fluid">
		<h1>Data Absen Mahasiswa</h1>
		<a href="create_absen.php"  button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_absen.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:pink;">
              	    <th>No.</th>
                    <th>ID Absen</th>
                    <th>Tanggal Absen</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
					<th>Kode Dosen</th>
                    <th>Sesi</th>
					<th>Kelas Sesi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_absen();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:pink;">
                            <td><?=$index++ ?></td>
                            <td><?=$data->idabsen ?></td>
                            <td><?=$data->tglabsen ?></td>
                            <td><?=$data->masuk ?></td>
							<td><?=$data->keluar ?></td>
                            <td><?=$data->kodedosen ?></td>
                            <td><?=$data->sesi ?></td>
							<td><?=$data->kelassesi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_absen.php?idabsen=<?=$data->idabsen ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses.php?idabsen=<?=$data->idabsen ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel absen mahasiswa.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>