<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$a = 1;  
	while ($a <= 10) {
		echo $a.'<br>';
		$a++;
	}
echo "<br>============================<br>";
	
	$a = 10;
	$y = 9;
	echo "Anak ayam turun 10";
	do {
		echo "<br>Anak ayam turun ".$a.", mati satu tinggal ".$y;
		$a--;
		$y--;
	} while ($a >= 1);

	




	?>
</body>
</html>