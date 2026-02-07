<?php
include "koneksi.php";

// Ambil id
$id = $_GET['id'];

// Ambil data lama
$query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Transaksi</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
        }
        .box {
            width: 400px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            background: #2c7be5;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Edit Transaksi</h3>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        <label>Jenis Bahan</label>
        <input type="text" name="bahan" value="<?= $data['bahan'] ?>" required>

        <label>Harga per Meter</label>
        <input type="number" name="harga_satuan" value="<?= $data['harga_satuan'] ?>" required>

        <label>Jumlah Meter</label>
        <input type="number" step="0.1" name="jumlah" value="<?= $data['jumlah'] ?>" required>

        <button type="submit">Update Data</button>
    </form>
</div>

</body>
</html>
