<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Dosen</title>
</head>
<br><br><br><br>
<body align="center">
	<div align="center" class="container-fluid">
		<h1>Data Dosen</h1>
		<a href="create_dosen.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_dosen.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:aqua;">
                    <th>No.</th>
                    <th>Kode Dosen</th>
                    <th>NIDN</th>
                    <th>NIP</th>
                    <th>Nama Dosen</th>
                    <th>Kode Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_dosen();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:aqua;">
                            <td><?=$index++ ?></td>
                            <td><?=$data->kodedosen ?></td>
                            <td><?=$data->nidn ?></td>
                            <td><?=$data->nip ?></td>
                            <td><?=$data->namadosen ?></td>
                            <td><?=$data->kodeprodi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_dosen.php?kodedosen=<?=$data->kodedosen ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses.php?kodedosen=<?=$data->kodedosen ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel data dosen.</td>
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