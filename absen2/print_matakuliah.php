<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Matakuliah</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, 
		td {
			padding: 15px;
		}
	</style>
</head>
<br><br><br><br>
<body>
	<h1>Laporan Data Matakuliah</h1>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Matakuliah</th>
				<th>Nama Matakuliah</th>
				<th>SKS</th>
				<th>Semester</th>
				<th>Kode Program Studi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_matakuliah();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
						<td><?=$data->kodemk ?></td>
						<td><?=$data->namamk ?></td>
						<td><?=$data->sks ?></td>
						<td><?=$data->smt ?></td>
						<td><?=$data->kodeprodi ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel data matakuliah.</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>