<?php
include "koneksi.php";

// Ambil id dari URL
$id = $_GET['id'];

// Hapus data
$query = mysqli_query($conn, "DELETE FROM transaksi WHERE id='$id'");

// Kembali ke halaman riwayat
header("Location: riwayat.php");
?>
