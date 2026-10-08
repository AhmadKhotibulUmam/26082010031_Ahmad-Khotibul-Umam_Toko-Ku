<?php require_once 'services/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Ku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <h1>Sistem Informasi Toko Ku</h1>
    </header>
    
    <div class="container">
        <!-- Tabel Produk -->
        <div class="card">
            <h2>Data Produk</h2>
            <table>
                <tr><th>ID Produk</th><th>Nama Barang</th><th>Harga</th></tr>
                <?php
                $res = $conn->query("SELECT * FROM produk");
                while($row = $res->fetch_assoc()) {
                    echo "<tr><td>{$row['id_produk']}</td><td>{$row['nama']}</td><td>Rp {$row['harga']}</td></tr>";
                }
                ?>
            </table>
        </div>

        <!-- Tabel Pembeli -->
        <div class="card">
            <h2>Data Pembeli</h2>
            <table>
                <tr><th>ID Pembeli</th><th>Nama</th><th>Kota</th></tr>
                <?php
                $res = $conn->query("SELECT * FROM pembeli");
                while($row = $res->fetch_assoc()) {
                    echo "<tr><td>{$row['id_pembeli']}</td><td>{$row['nama']}</td><td>{$row['kota']}</td></tr>";
                }
                ?>
            </table>
        </div>

        <!-- Tabel Pesanan -->
        <div class="card">
            <h2>Data Pesanan (Transaksi)</h2>
            <table>
                <tr><th>ID Pesanan</th><th>ID Produk</th><th>ID Pembeli</th><th>Jumlah Beli</th></tr>
                <?php
                $res = $conn->query("SELECT * FROM pesanan");
                while($row = $res->fetch_assoc()) {
                    echo "<tr><td>{$row['id_pesanan']}</td><td>{$row['id_produk']}</td><td>{$row['id_pembeli']}</td><td>{$row['jumlah']}</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>``