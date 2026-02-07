<?php
include "koneksi.php";

// Ambil data transaksi
$query = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Transaksi Jahit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 90%;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #2c7be5;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        a {
            display: inline-block;
            margin-bottom: 15px;
            text-decoration: none;
            color: #2c7be5;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📋 Riwayat Transaksi Jahit</h2>

    <a href="index.php">+ Tambah Transaksi</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nota</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Bahan</th>
            <th>Harga / Meter</th>
            <th>Meter</th>
            <th>Total Bayar</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nota'] ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= ucfirst($data['bahan']) ?></td>
            <td>Rp <?= number_format($data['harga_satuan'], 0, ',', '.') ?></td>
            <td><?= $data['jumlah'] ?></td>
            <td>Rp <?= number_format($data['total'], 0, ',', '.') ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $data['id'] ?>"
                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                    style="color:red; font-weight:bold;">
                    Hapus
                </a>
            </td>

        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
