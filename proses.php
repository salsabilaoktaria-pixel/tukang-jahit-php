<?php
include 'koneksi.php';

$nota          = 'NT-' . time();
$tanggal       = date('Y-m-d');
$nama          = $_POST['nama'];
$bahan         = $_POST['bahan'];
$harga         = $_POST['harga_bahan'];
$jumlah        = $_POST['meter'];
$diskon        = $_POST['diskon'];

$subtotal = $harga * $jumlah;
$potongan = ($diskon / 100) * $subtotal;
$total = $subtotal - $potongan;

mysqli_query($koneksi, "INSERT INTO transaksi
(nota, tanggal, nama, bahan, harga_satuan, jumlah, total)
VALUES
('$nota','$tanggal','$nama','$bahan','$harga','$jumlah','$total')");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nota Transaksi</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #eef4ff;
        }
        .card {
            width: 420px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        h2 {
            text-align: center;
            color: #2c7be5;
        }
        table {
            width: 100%;
            margin-top: 15px;
        }
        td {
            padding: 8px;
        }
        .total {
            font-weight: bold;
            font-size: 18px;
            color: #1a5fd0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background: #2c7be5;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>🧾 Nota Jahit</h2>
    <table>
        <tr><td>Nota</td><td>: <?= $nota ?></td></tr>
        <tr><td>Tanggal</td><td>: <?= $tanggal ?></td></tr>
        <tr><td>Nama</td><td>: <?= $nama ?></td></tr>
        <tr><td>Bahan</td><td>: <?= ucfirst($bahan) ?></td></tr>
        <tr><td>Harga / Meter</td><td>: Rp <?= number_format($harga_satuan,0,',','.') ?></td></tr>
        <tr><td>Jumlah</td><td>: <?= $jumlah ?> meter</td></tr>
        <tr><td>Subtotal</td><td>: Rp <?= number_format($subtotal,0,',','.') ?></td></tr>
        <tr><td>Diskon</td><td>: <?= $diskon ?>%</td></tr>
        <tr><td>Potongan</td><td>: Rp <?= number_format($potongan,0,',','.') ?></td></tr>

        <tr>
            <td class="total">Total Bayar</td>
            <td class="total">Rp <?= number_format($total,0,',','.') ?></td>
        </tr>
    </table>


    <a href="index.php">+ Transaksi Baru</a>
    <a href="riwayat.php">📋 Riwayat</a>
</div>

</body>
</html>