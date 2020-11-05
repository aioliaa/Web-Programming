<?php  
include 'koneksi.php';

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
		<div class="col">
			<div class="cols-12">
				<h4>Data Jam Belajar</h4>
				<hr>
				<form action="act-jam belajar.php" method="POST">
					<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" id="nama" class="form-control" required>
					</div>
					<div class="form-group">
					<label for="jur">Jurusan</label>
					<select name="jurusan" id="jur" class="form-control">
						<option disabled="true" selected="true">Pilih Jurusan</option>
						<option value="MIK">MIK</option>
						<option value="ADP">ADP</option>
						<option value="AKP">AKP</option>
						<option value="ITS">ITS</option>
					</select>
					</div>
					<div class="form-group">
					<label for="senin">Senin</label>
					<input type="text" name="senin" id="senin" class="form-control" required>
					</div>
					<div class="form-group">
					<label for="selasaa">Selasa</label>
					<input type="text" name="selasa" id="selasa" class="form-control" required>
					</div>
					<div class="form-group">
					<label for="rabu">Rabu</label>
					<input type="text" name="rabu" id="rabu" class="form-control" required>
					</div>
					<div class="form-group">
					<label for="kamis">Kamis</label>
					<input type="text" name="kamis" id="kamis" class="form-control" required>
					</div>
					<div class="form-group">
					<label for="jum_at">Jum'at</label>
					<input type="text" name="jum_at" id="jum_at" class="form-control" required>
					</div>
					<div class="form-group">
					<label for="sabtu">Sabtu</label>
					<input type="text" name="sabtu" id="sabtu" class="form-control" required>
					</div>
					<div class="form-group float-right">
                    <a href="jam belajar.php" class="btn btn-secondary btn-md">Kembali</a>
                    <button name="submit" class="btn btn-primary btn-md">Simpan</button>
                   </div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>