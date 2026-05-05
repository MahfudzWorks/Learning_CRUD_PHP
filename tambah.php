<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO siswa VALUES(NULL, '$nama', '$alamat')");
    header("location: index.php");
}

?>

<h2>Tambah Data</h2>
<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Alamat: <textarea name="alamat"></textarea><br>
    <button type="submit" name="submit">Simpan</button>
</form>