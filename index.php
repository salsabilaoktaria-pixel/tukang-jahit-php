<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Tukang Jahit</title>
</head>
<body>

<h2>Aplikasi Tukang Jahit</h2>

<form method="post" action="proses.php">
    Nama Baju:
    <input type="text" name="nama" required><br><br>

    Jenis Bahan:<br>
    <input type="radio" name="bahan" value="katun" required> Katun<br>
    <input type="radio" name="bahan" value="satin"> Satin<br>
    <input type="radio" name="bahan" value="denim"> Denim<br><br>

    Harga Dasar:
    <input type="number" name="harga" required><br><br>

    Jumlah:
    <input type="number" name="jumlah" required><br><br>

    Diskon (%):
    <input type="number" name="diskon"><br><br>

    <button type="submit">Hitung</button>
</form>

</body>
</html>
