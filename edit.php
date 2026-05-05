<?php

include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
$d = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat =$_POST['alamat'];

    mysqli_query($conn, "UPDATE siswa SET nama='$nama', alamat='$alamat' WHERE id='$id'");
    header("location: index.php");
}

?>

<h2>Edit Data</h2>
<form method="POST">
    Nama: <input type="text" name="nama" value="<?=  $d['$nama']; ?>"><br>
    Alamat: <textarea name="alamat"><?= $d['$alamat']; ?></textarea><br>
    <button type="submit" name="submit">Update</button>
</form>