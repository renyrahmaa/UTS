<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>	
	<title>Jadwal Kuliah</title>
</head>
<br><br><br><br>
<body align="center">	
	<div align="center" class="container-fluid">
		<h1>Jadwal Kuliah</h1>
		<a href="create_jadwal.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_jadwal.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:lime;">
					<th>No.</th>
					<th>ID</th>
					<th>Jadwal ID</th>
					<th>Kode Dosen</th>
					<th>Hari</th>
					<th>Tahun Akademik</th>
					<th>Semester</th>	
					<th>Kode Mata Kuliah</th>
					<th>Sesi</th>	
					<th>Jam Masuk</th>
					<th>Jam Keluar</th>
					<th>Kelas</th>
					<th>Ruang</th>
					<th>Status</th>
					<th>Kelas Sesi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_jadwal();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:lime;">
							<td><?=$index++ ?></td>
							<td><?=$data->id ?></td>
							<td><?=$data->jadwalid ?></td>
							<td><?=$data->kodedosen ?></td>
							<td><?=$data->hari ?></td>
							<td><?=$data->thnakademik ?></td>
							<td><?=$data->semester ?></td>
							<td><?=$data->kodemk ?></td>
							<td><?=$data->sesi ?></td>
							<td><?=$data->jammasuk ?></td>
							<td><?=$data->jamkeluar ?></td>
							<td><?=$data->kelas ?></td>
							<td><?=$data->ruang ?></td>
							<td><?=$data->status ?></td>
							<td><?=$data->kelassesi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_jadwal.php?id=<?=$data->id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?id=<?=$data->id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="16">Belum ada data pada tabel jadwal kuliah.</td>
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