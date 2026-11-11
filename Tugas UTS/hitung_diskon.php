<?php
// Fungsi untuk menghitung diskon berdasarkan total belanja
function hitungDiskon($totalBelanja) {
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        // Diskon 10% untuk total belanja >= Rp. 100.000
        $diskon = 0.1 * $totalBelanja;
    } elseif ($totalBelanja >= 50000) {
        // Diskon 5% untuk total belanja >= Rp. 50.000 dan < Rp. 100.000
        $diskon = 0.05 * $totalBelanja;
    }
    // Total belanja < Rp. 50.000 : tidak ada diskon

    return $diskon;
}

// Fungsi bantu untuk format Rupiah
function rupiah($angka) {
    return "Rp. " . number_format($angka, 0, ',', '.');
}

// Ambil total belanja dari form (default Rp. 120.000)
$totalBelanja = isset($_POST['total_belanja']) ? (float) $_POST['total_belanja'] : 120000;

// Panggil fungsi untuk menghitung diskon dan total bayar
$diskon      = hitungDiskon($totalBelanja);
$totalBayar  = $totalBelanja - $diskon;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Diskon Belanja</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }
        .card {
            width: 100%;
            max-width: 420px;
            margin: 16px;
            padding: 32px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }
        h2 {
            margin: 0 0 20px;
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.2s;
        }
        input[type="number"]:focus { border-color: #667eea; }
        button {
            width: 100%;
            margin-top: 14px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #667eea;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover { background: #5568d3; }
        hr {
            margin: 24px 0;
            border: none;
            border-top: 1px solid #eee;
        }
        .baris {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            color: #444;
        }
        .diskon { color: #e53e3e; }
        .total {
            margin-top: 8px;
            padding: 14px;
            border-radius: 8px;
            background: #f0f4ff;
            font-size: 18px;
            font-weight: 700;
            color: #2d3a8c;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Program Hitung Diskon</h2>

        <form method="post">
            <label for="total_belanja">Total Belanja (Rp)</label>
            <input type="number" id="total_belanja" name="total_belanja" min="0" value="<?= htmlspecialchars($totalBelanja) ?>" required>
            <button type="submit">Hitung</button>
        </form>

        <hr>

        <div class="baris"><span>Total belanja</span><span><?= rupiah($totalBelanja) ?></span></div>
        <div class="baris diskon"><span>Diskon</span><span>- <?= rupiah($diskon) ?></span></div>
        <div class="baris total"><span>Total yang harus dibayar</span><span><?= rupiah($totalBayar) ?></span></div>
    </div>
</body>
</html>