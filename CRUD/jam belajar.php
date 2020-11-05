<?php  
$conn = mysqli_connect("localhost", "root", "", "db-mahasiswa");
$result = mysqli_query($conn, "SELECT * FROM jam_total");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Jurusan</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="cols-12">
				<div class="row-2"></div>
				<div class="col-6"><h3>Data</h3></div>
				 
				<table class="table table-bordered table-sm">
					<thead class="bg-info">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jurusan</th>
							<th>Senin</th>
							<th>Selasa</th>
							<th>Rabu</th>
							<th>Kamis</th>
							<th>Jum'at</th>
							<th>Sabtu</th>
							<th>Total Waktu</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($result as $row) : ?>
						<tr>
							<td><?=  $no++ ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['jurusan']; ?></td>
							<td><?php echo $row['senin']; ?></td>
							<td><?php echo $row['selasa']; ?></td>
							<td><?php echo $row['rabu']; ?></td>
							<td><?php echo $row['kamis']; ?></td>
							<td><?php echo $row['jum_at']; ?></td>
							<td><?php echo $row['sabtu']; ?></td>
							<td><?php echo $row['total']; ?></td>
							<td><a href="edit.php" class="btn btn-sm btn-success">Edit</a>
								<a href="Hapus.php" class="btn btn-sm btn-danger">Hapus</a>
								<a href="Hapus.php" class="btn btn-sm btn-warning">Detail</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class="col-12"><a href="add-jam belajar.php" class="btn btn-primary btn-sm float-right">Tambah Data</a></div>
			</div>
		</div>
	</div>
	<hr>
	<p class="ml-3"><i>* Data yang di tampilkan dalam kolom nama hari (Senin, Selasa, Rabu, Kamis, Jum'at dan Sabtu) berupa dalam satuan waktu (menit)</i></p>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>