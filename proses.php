<?php
$nama   = $_POST['nama'];
$bahan  = $_POST['bahan'];
$harga  = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$diskon = $_POST['diskon'];

// Tambahan harga berdasarkan bahan (IF)
if ($bahan == "katun") {
    $tambahan = 5000;
} elseif ($bahan == "satin") {
    $tambahan = 10000;
} else {
    $tambahan = 15000;
}

$harga_satuan = $harga + $tambahan;

// Hitung total pakai FOR
$total = 0;
for ($i = 1; $i <= $jumlah; $i++) {
    $total += $harga_satuan;
}

// Hitung diskon
$potongan = ($diskon / 100) * $total;
$total_bayar = $total - $potongan;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>

<h2>Hasil</h2>

Nama Baju: <?= $nama ?><br>
Jenis Bahan: <?= $bahan ?><br>
Harga Satuan: Rp <?= number_format($harga_satuan) ?><br>
Jumlah: <?= $jumlah ?><br>
Diskon: <?= $diskon ?>%<br>
<hr>
<b>Total Bayar: Rp <?= number_format($total_bayar) ?></b>

<br><br>
<a href="index.php">Kembali</a>

</body>
</html>
