<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Tukang Jahit</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #e0f2ff, #f7faff);
        }
        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        h2 {
            text-align: center;
            color: #2c7be5;
            margin-bottom: 25px;
        }
        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #2c7be5;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #2c7be5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
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
            <option value="">-- Pilih --</option>
            <option value="kemeja">Kemeja</option>
            <option value="celana">Celana</option>
            <option value="gamis">Gamis</option>
            <option value="jas">Jas</option>
        </select>

        <label>Jenis Bahan</label>
        <select name="bahan" required>
            <option value="">-- Pilih --</option>
            <option value="katun">Katun</option>
            <option value="sutra">Sutra</option>
            <option value="jeans">Jeans</option>
            <option value="wol">Wol</option>
        </select>

        <label>Harga Bahan / Meter (Rp)</label>
        <input type="number" name="harga_bahan" placeholder="Contoh: 45000" required>

        <label>Jumlah Bahan (Meter)</label>
        <input type="number" step="0.1" name="meter" placeholder="Contoh: 2.5" required>

        <label>Diskon (%)</label>
        <input type="number" name="diskon" placeholder="Contoh: 10" min="0" max="100" value="0">

        <button type="submit">Hitung Biaya</button>
    </form>
</div>

</body>
</html>
