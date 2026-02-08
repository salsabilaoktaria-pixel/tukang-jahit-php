<?php
include "koneksi.php";

$id            = $_POST['id'];
$nama          = $_POST['nama'];
$bahan         = $_POST['bahan'];
$harga_satuan  = $_POST['harga_satuan'];
$jumlah        = $_POST['jumlah'];

$total = $harga_satuan * $jumlah;

mysqli_query($koneksi, "UPDATE transaksi SET
    nama='$nama',
    bahan='$bahan',
    harga_satuan='$harga_satuan',
    jumlah='$jumlah',
    total='$total'
    WHERE id='$id'
");

header("Location: riwayat.php");
?>