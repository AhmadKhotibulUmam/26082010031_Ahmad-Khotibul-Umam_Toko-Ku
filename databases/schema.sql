DROP DATABASE IF EXISTS db_toko_ku;
CREATE DATABASE db_toko_ku;
USE db_toko_ku;

CREATE TABLE produk (
    id_produk INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    harga INT
);

CREATE TABLE pembeli (
    id_pembeli INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    kota VARCHAR(50)
);

CREATE TABLE pesanan (
    id_pesanan INT PRIMARY KEY AUTO_INCREMENT,
    id_produk INT,
    id_pembeli INT,
    jumlah INT,
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk),
    FOREIGN KEY (id_pembeli) REFERENCES pembeli(id_pembeli)
);

INSERT INTO produk (nama, harga) VALUES ('Buku', 10000), ('Pena', 5000), ('Tas', 50000), ('Topi', 20000), ('Sepatu', 100000);
INSERT INTO pembeli (nama, kota) VALUES ('Ali', 'Surabaya'), ('Budi', 'Malang'), ('Caca', 'Sidoarjo'), ('Deni', 'Gresik'), ('Eka', 'Lamongan');
INSERT INTO pesanan (id_produk, id_pembeli, jumlah) VALUES (1, 1, 2), (2, 2, 5), (3, 3, 1), (4, 4, 3), (5, 5, 1);