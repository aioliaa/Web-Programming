<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Usia</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col">
			<div class="cols-12">
				<h4>Data Usia</h4>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
					<label for="usia">Usia</label>
					<input type="text" name="usia" id="usia" class="form-control" required>
					</div>
					<div class="form-group float-right">
                    <button name="submit" id="submit" method="POST">Submit</button>
                   </div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	
</body>
</html>

<?php 
if (isset($POST['submit'])) {
	$usia = $_POST['usia'];

    if ($usia <= 5 ) {
        $ket = 'B';
    } elseif ($usia <= 16) {
        $ket = 'A';
    } elseif ($usia <= 50) {
        $ket = 'D';
    }else{
        $ket = 'T';
    }

    switch ($ket) {
        case 'B':
            $status = 'Balita';
            break;

        case 'A':
            $status = 'Anak-anak';
            break;

        case 'D':
            $status = 'Dewasa';
            break;
        
        default:
            $status = 'Tua';
            break;
	}

if ($usia) {
		echo "Usia anda : ".$usia;
		echo "<br>Status : ".$status;
	} else {
		echo "Data Gagal Ditambahkan";
	}
}

?>