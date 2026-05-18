<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background: #f4f7fb;
            padding: 40px;
        }

        .container{
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h2{
            color: #1e293b;
            font-size: 32px;
        }

        .btn-tambah{
            background: #16a34a;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn-tambah:hover{
            background: #15803d;
            transform: translateY(-2px);
        }

        table{
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 15px;
        }

        thead{
            background: #1e293b;
            color: white;
        }

        th, td{
            padding: 16px;
            text-align: left;
        }

        tbody tr{
            border-bottom: 1px solid #e5e7eb;
            transition: 0.3s;
        }

        tbody tr:hover{
            background: #f1f5f9;
        }

        .aksi{
            display: flex;
            gap: 10px;
        }

        .btn-edit{
            background: #2563eb;
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-edit:hover{
            background: #1d4ed8;
        }

        .btn-hapus{
            background: #dc2626;
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-hapus:hover{
            background: #b91c1c;
        }

        @media(max-width:768px){

            body{
                padding: 20px;
            }

            .container{
                padding: 20px;
            }

            .header{
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            table{
                font-size: 14px;
            }

            th, td{
                padding: 12px;
            }

            .aksi{
                flex-direction: column;
            }

        }

    </style>

</head>
<body>

    <div class="container">

        <div class="header">
            <h2>Data Siswa</h2>

            <a href="tambah.php" class="btn-tambah">
                + Tambah Data
            </a>
        </div>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php $no = 1; ?>
                <?php while($row = mysqli_fetch_assoc($data)) : ?>

                <tr>
                    <td><?= $no++; ?></td>

                    <td><?= $row['nama']; ?></td>

                    <td><?= $row['alamat']; ?></td>

                    <td>
                        <div class="aksi">

                            <a 
                                href="edit.php?id=<?= $row['id']; ?>" 
                                class="btn-edit"
                            >
                                Edit
                            </a>

                            <a 
                                href="hapus.php?id=<?= $row['id']; ?>" 
                                class="btn-hapus"
                            >
                                Hapus
                            </a>

                        </div>
                    </td>
                </tr>

                <?php endwhile; ?>

            </tbody>

        </table>

    </div>

</body>
</html>