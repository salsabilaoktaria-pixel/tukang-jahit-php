<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Tukang Jahit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 500px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 8px;
            margin: 6px 0 15px;
        }
        button {
            background: #2c7be5;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #1a5fd0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🧵 Aplikasi Tukang Jahit</h2>

    <form action="proses.php" method="post">

        <label>Nama Pelanggan</label>
        <input type="text" name="nama" required>

        <label>Jenis Pakaian</label>
        <select name="jenis_pakaian" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="kemeja">Kemeja</option>
            <option value="celana">Celana</option>
            <option value="gamis">Gamis</option>
            <option value="jas">Jas</option>
        </select>

        <label>Jenis Bahan</label>
        <select name="bahan" required>
            <option value="">-- Pilih Bahan --</option>
            <option value="katun">Katun</option>
            <option value="sutra">Sutra</option>
            <option value="jeans">Jeans</option>
            <option value="wol">Wol</option>
        </select>

        <label>Harga Bahan per Meter (Rp)</label>
        <input type="number" name="harga_bahan" placeholder="Contoh: 45000" required>

        <label>Jumlah Bahan (Meter)</label>
        <input type="number" name="meter" step="0.1" placeholder="Contoh: 2.5" required>

        <button type="submit">Hitung Biaya Jahit</button>

    </form>
</div>

</body>
</html>
