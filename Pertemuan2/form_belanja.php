<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
        }
        .form-belanja {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .form-title {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px 5px 0 0;
        }
        .btn-submit {
            width: 100%;
        }
        .hasil-belanja {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #ffffff;
            border-radius: 5px;
        }
    </style>
</head>
<body class="container mt-5">

    <div class="form-belanja">
        <div class="form-title">Belanja Online</div>
        
        <form action="" method="POST">
            <div class="mb-3">
                <label for="customer" class="form-label">Nama Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pilih Produk</label><br>
                <div class="form-check">
                    <input type="radio" id="tv" name="produk" value="TV" class="form-check-input" required> 
                    <label for="tv" class="form-check-label">TV</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="kulkas" name="produk" value="Kulkas" class="form-check-input">
                    <label for="kulkas" class="form-check-label">Kulkas</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="mesin_cuci" name="produk" value="Mesin Cuci" class="form-check-input">
                    <label for="mesin_cuci" class="form-check-label">Mesin Cuci</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Beli</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary btn-submit">Simpan</button>
        </form>
    </div>

    <!-- Menampilkan Hasil -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer = htmlspecialchars($_POST["customer"]);
        $produk = htmlspecialchars($_POST["produk"]);
        $jumlah = (int) $_POST["jumlah"];

        // Harga produk
        $harga_produk = [
            "TV" => 3000000,
            "Kulkas" => 4000000,
            "Mesin Cuci" => 2500000
        ];

        // Hitung total harga
        $total_harga = $harga_produk[$produk] * $jumlah;

        echo '<div class="hasil-belanja">';
        echo "<h4>Detail Pembelian</h4>";
        echo "<p><strong>Nama Customer:</strong> $customer</p>";
        echo "<p><strong>Produk Dipilih:</strong> $produk</p>";
        echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
        echo "<p><strong>Total Harga:</strong> Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
        echo '</div>';
    }
    ?>

</body>
</html>