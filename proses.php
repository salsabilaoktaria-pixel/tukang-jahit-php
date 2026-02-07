<?php
include "koneksi.php";

// Ambil data dari form
$nama           = $_POST['nama'];
$jenis_pakaian  = $_POST['jenis_pakaian'];
$bahan          = $_POST['bahan'];
$harga_bahan    = (int) $_POST['harga_bahan'];
$meter          = (float) $_POST['meter'];

// Tentukan ongkos jahit berdasarkan jenis pakaian
if ($jenis_pakaian == "kemeja") {
    $ongkos_jahit = 50000;
} elseif ($jenis_pakaian == "celana") {
    $ongkos_jahit = 40000;
} elseif ($jenis_pakaian == "gamis") {
    $ongkos_jahit = 80000;
} elseif ($jenis_pakaian == "jas") {
    $ongkos_jahit = 150000;
} else {
    $ongkos_jahit = 0;
}

// Hitung total bahan
$total_bahan = $harga_bahan * $meter;

// Subtotal
$subtotal = $total_bahan + $ongkos_jahit;

// Diskon
$diskon = 0;
if ($subtotal >= 300000) {
    $diskon = 0.10 * $subtotal;
} elseif ($subtotal >= 200000) {
    $diskon = 0.05 * $subtotal;
}

// Total akhir
$total_bayar = $subtotal - $diskon;

// Simpan ke database
$nota = "NT" . rand(1000,9999);
$sql = "INSERT INTO transaksi 
(nota, tanggal, nama, bahan, harga_satuan, jumlah, total)
VALUES
('$nota', CURDATE(), '$nama', '$bahan', '$harga_bahan', '$meter', '$total_bayar')";

mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
        }
        .box {
            width: 500px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 6px;
        }
        .total {
            font-weight: bold;
            font-size: 18px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #2c7be5;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>🧾 Nota Jahit</h2>
    <table>
        <tr>
            <td>Nota</td>
            <td>: <?= $nota ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Pakaian</td>
            <td>: <?= ucfirst($jenis_pakaian) ?></td>
        </tr>
        <tr>
            <td>Jenis Bahan</td>
            <td>: <?= ucfirst($bahan) ?></td>
        </tr>
        <tr>
            <td>Total Bahan</td>
            <td>: Rp <?= number_format($total_bahan, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>Ongkos Jahit</td>
            <td>: Rp <?= number_format($ongkos_jahit, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>: Rp <?= number_format($diskon, 0, ',', '.') ?></td>
        </tr>
        <tr class="total">
            <td>Total Bayar</td>
            <td>: Rp <?= number_format($total_bayar, 0, ',', '.') ?></td>
        </tr>
    </table>

    <a href="riwayat.php">📋 Lihat Riwayat Transaksi</a>
</div>

</body>
</html>
