<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Server</title>
</head>
<body>
    <form action="" method="post">
        Nama <input type="text" name="nama"><br>
        Golongan <input type="text" name="gol"><br>
        Jam Lembur <input type="text" name="jamlembur"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>

<?php

    

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $gol = $_POST["gol"];
    $jamlembur = $_POST["jamlembur"];

    $gaji = 150 * 75000;
    $upahlembur = 75000;
    $gajilembur = $jamlembur * (0.25 * $upahlembur);
    $total = $gajilembur + $gaji; 
    $GajiBersih = $total * 4;


    echo "<br>Nama : ".$nama;
    echo "<br>Golongan : ".$gol;
    echo "<br>Jam Lembur : ".$jamlembur;
    echo "<br>Gaji Lembur : Rp.".$gajilembur;
    echo "<br>Gaji Bersih : Rp. ".$GajiBersih;


   

    

}
?>

