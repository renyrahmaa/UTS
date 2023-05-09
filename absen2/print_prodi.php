<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Program Studi</title>
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
	<h1>Laporan Program Studi</h1>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Program Studi</th>
				<th>Nama Program Studi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_prodi();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
						<td><?=$data->kodeprodi ?></td>
						<td><?=$data->namaprodi ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel data program studi.</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>