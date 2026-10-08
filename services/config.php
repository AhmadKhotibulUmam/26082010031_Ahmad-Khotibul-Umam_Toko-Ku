<?php
$conn = new mysqli('localhost', 'root', '', 'db_toko_ku');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>