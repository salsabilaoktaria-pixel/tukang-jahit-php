<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Transaksi</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f7ff;
        }
        .container {
            width: 95%;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2c7be5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #2c7be5;
            color: white;
        }
        tr:hover {
            background: #f1f4ff;
        }
        a {
            padding: 6px 12px;
            background: #e63946;
            color: white;
            border-radius: 6px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📋 Riwayat Transaksi Jahit</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nota</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Bahan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; while($d=mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nota'] ?></td>
            <td><?= $d['tanggal'] ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= ucfirst($d['bahan']) ?></td>
            <td>Rp <?= number_format($d['harga_satuan'],0,',','.') ?></td>
            <td><?= $d['jumlah'] ?></td>
            <td>Rp <?= number_format($d['total'],0,',','.') ?></td>
            <td>
                <a href="hapus.php?id=<?= $d['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="index.php">+ Kembali</a>

</div>
</body>
</html>
