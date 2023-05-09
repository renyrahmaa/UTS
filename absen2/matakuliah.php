<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Matakuliah</title>
</head>
<br><br><br><br>
<body align="center">		
	<div align="center" class="container-fluid">
		<h1>Data Matakuliah</h1>
		<a href="create_matakuliah.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_matakuliah.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:orange;">
              	    <th>No.</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
					<th>SKS</th>
					<th>Semester</th>
					<th>Kode Program Studi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_matakuliah();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:orange;">
                            <td><?=$index++ ?></td>
                            <td><?=$data->kodemk ?></td>
                            <td><?=$data->namamk ?></td>
							<td><?=$data->sks ?></td>
							<td><?=$data->smt ?></td>
							<td><?=$data->kodeprodi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_matakuliah.php?kodemk=<?=$data->kodemk?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?kodemk=<?=$data->kodemk ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel matakuliah.</td>
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