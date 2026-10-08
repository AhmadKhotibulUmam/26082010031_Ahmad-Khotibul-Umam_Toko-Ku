1. Entitas Pembeli ( pembeli )
   - Atribut: id_pembeli (PK), nama, kota

ii. Entitas Produk ( produk )
   - Atribut: id_produk (PK), nama, harga

c. Entitas Pesanan ( pesanan )
   - Atribut: id_pesanan (PK), id_pembeli (FK), id_produk (FK), jumlah

## Relasi dan Kardinalitas

- Relasi antara tabel pembeli dan pesanan adalah One-to-Many (1:N).
- Penjelasan: Satu pembeli dapat melakukan banyak transaksi pesanan, namun satu pesanan hanya milik satu pembeli.

## Cara Menjalankan Proyek

a. Import database ke MySQL/MariaDB:
   - Jalankan script yang ada di dalam folder `database/schema.sql` melalui DBeaver atau terminal.