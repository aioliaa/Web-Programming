<?php
$nama = "Vanjess"
$jamker = 150;
$kerja = 180 ;
$jamlembur = $kerja - $jamlembur;   
$gol = "c";
switch ($gol) {
	case 'A':
		$upah = 5000;
		break;
	case 'B':
		$upah = 6000;
		break;
	case 'C':
		$upah = 75000;
		break;

	default:
		$upah = 9000;
		break;
}

if ($kerja > 150) {
	$persen = 0.25 * $upah;
	$upahlembur = $upah + $persen;
	$gajilembur = $jamlembur * $upahlembur;
	$gaji = $jamker * $upah;
	$total = $gaji * $gajilembur;
	$gb = $total * 4;
} else {
	$gaji = $jamker * $upah;
	$gb = $gaji * 4;
	$total = 0;
}
echo "Nama : ".$nama;
echo "Nama : ".$;
echo "Nama : ".$;
echo "Nama : ".$;
echo "Nama : ".$;

?>