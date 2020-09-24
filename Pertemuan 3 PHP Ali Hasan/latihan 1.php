<?php 
$nama = "Anya Geraldin";
$nilai_1 = 89;
$nilai_2 = 79;
$nilai = ($nilai_1 + $nilai_2)/ 2;
if ($nilai > 85) {
	$grade = 'A';
	
} elseif ($nilai > 75) {
	$grade = 'B';
	
} elseif ($nilai > 65) {
	$grade = 'C';
	
} else {
	$grade = 'D';
	
}
 
if ($grade == "A") {
	$keterangan = "Sangat Baik";
} elseif ($grade == "B") {
	$keterangan = "Baik";
} elseif ($grade == "C") {
	$keterangan = "Cukup";
} else {
	$keterangan = "Kurang";

}

echo "Nama : ".$nama;
echo "<br>Nilai 1 + Nilai 2 : ".$nilai;
echo "<br>Grade : ".$grade;
echo "<br>Keterangan : ".$keterangan;
 

?>