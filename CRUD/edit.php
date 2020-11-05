<?php 
include 'koneksi.php';
$id = $_GET['id'];

$sql  = mysqli_query($conn, "SELECT * FROM jam_total WHERE id = no ");

if ($sql) {
    $row = mysqli_fetch_assoc($sql);
} else {
    echo "Data Tidak Ditemukan";
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required value=<?=$row['nim']; ?>>
        
        <br>
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required value="<?=$row['nama']; ?>">
        
        <br>
        <label for="jk">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jk">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
       
       <br>
        <label for="jurusan">Jurusan:</label>
         <select name="jurusan" id="name">
        <?php foreach ($result as $row): ?>
            <option value="<?=$row['id']; ?>"><?=$row['nama']; ?></option>
        <?php endforeach ?>
        </select><br>
        
        <br>
        <label for="alamat">Alamat:</label>
        <textarea rows="3" cols="30" name="alamat" required value="<?=$row['alamat']; ?>" ></textarea>
        
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required value="<?=$row['email']; ?>">

        <br>
        <label for="telp">No Telepon:</label>
        <input type="text" id="telp" name="telp" required value="<?=$row['no_telepon']; ?>">
        
        <br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
