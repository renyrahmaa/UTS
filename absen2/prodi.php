<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
 	<title>Data Program Studi</title>
</head>
<br><br><br><br>
<body align="center">		
	<div align="center" class="container-fluid">
		<h1>Data Program Studi</h1>
		<a href="create_prodi.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_prodi.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table align="center" class="table table-striped" border=1>
			<thead align="center">
				<tr align="center" style="background-color:grey;">
              	    <th>No.</th>
                    <th>Kode Program Studi</th>
                    <th>Nama Program Studi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_prodi();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
						<tr style="background-color:grey;">
                            <td><?=$index++ ?></td>
                            <td><?=$data->kodeprodi ?></td>
                            <td><?=$data->namaprodi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_prodi.php?kodeprodi=<?=$data->kodeprodi ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?kodeprodi=<?=$data->kodeprodi ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel program studi.</td>
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