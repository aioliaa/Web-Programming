<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get and Post</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col">
			<div class="cols-12">
				<h4>Data Jam Belajar</h4>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
					<label for="usia">Usia</label>
					<input type="text" name="usia" id="usia" class="form-control" required>
					</div>
					<div class="form-group float-right">
                    <a  name="submit" class="btn btn-success btn-md">Submit</a>
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

    if ($usia < 6 ) {
        $ket = 'B';
    } elseif ($usia < 17) {
        $ket = 'A';
    } elseif ($usia < 51) {
        $ket = 'D';
    }else{
        $ket = 'T';
    }

    switch (true) {
        case ($ket = 'B'):
            $status = 'Balita';
            break;

        case ($ket = 'A'):
            $status = 'Anak-anak';
            break;

        case ($ket = 'D'):
            $status = 'Dewasa';
            break;
        
        default:
            $status = 'Tua';
            break;
    
    
         echo "Usia Anda : ".$usia;
         echo "Data Gagal ditambahkan";
  }
}
 ?>