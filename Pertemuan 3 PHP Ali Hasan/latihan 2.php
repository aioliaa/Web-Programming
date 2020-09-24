<?php
$nama = "Vanjess";
$tugas = 90;
$uts = 100;
$uas = 80;
$nilai = ($tugas*0.2)+($uts*0.3)+($uas*0.5);  
switch (true) {
	case ($nilai > 65):
		$ket = "Lulus";
		break;
	
	default:
		$ket = "Tidak Lulus";
		break;
}
switch (true) {
	case ($nilai > 85):
		$grade = "A";
		break;

	case ($nilai > 75):
		$grade = "B";
		break;

	case ($nilai > 65):
		$grade = "C";
		break;
	
	default:
		$grade = "D";
		break;
}
echo "Keterangan : ".$grade;
echo "<br>Nama :".$nama;
echo "<br>Nilai : ".$nilai;
echo "<br>Keterangan : ".$ket;
?>