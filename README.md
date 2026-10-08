# Proyek Sistem Toko Ku

## Penjelasan Database
Database `db_toko_ku` memiliki 3 tabel:
1. **produk**: Menyimpan data barang (id_produk, nama, harga).
2. **pembeli**: Menyimpan data pelanggan (id_pembeli, nama, kota).
3. **pesanan**: Tabel relasi/transaksi (id_pesanan, id_produk, id_pembeli, jumlah).

**Kardinalitas / Relasi (1:N):**
- Satu `produk` dapat dipesan berkali-kali di banyak `pesanan`.
- Satu `pembeli` dapat melakukan banyak `pesanan`.

## Cara Menjalankan
1. Aktifkan Apache & MySQL di Laragon.
2. Buat database `db_toko_ku` dan jalankan script di `database/schema.sql` via DBeaver.
3. Akses project via browser di `http://localhost/Nama_Folder_Project_Kamu/`.