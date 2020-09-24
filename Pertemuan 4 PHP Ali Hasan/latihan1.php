
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tanggal</title>
</head>
<body>
	<select>
	<?php 
	for ($i=2010; $i <= 2020; $i++) { 
		echo "Tahun : <option>".$i."</option>";
	}


	$v = 1;
	while ($v <= 31) {
		echo "<br>Tanggal : <option>".$v."</option>";
	$v++;
	}

	$x = 1;
	do {
	echo "<br>Bulan : <option>".$x."</option>";
	$x++;
	}
	while ($x <= 12);

	?>
	</select>
	<select name="Tanggal">
		
	</select>
	<select name="Bulan">
		
	</select>
</body>
</html>