<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<h2>Data Siswa</h2>
<a href="tambah.php">Tambah Data</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; ?>
    <?php while($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
            <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>