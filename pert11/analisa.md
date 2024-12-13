# Solution For Product

## 1. Struktur Data Produk
Produk akan memiliki atribut berikut:
- **Nama Produk**:
  - Disimpan sebagai tipe data `VARCHAR` (Laravel: `string`).
  - Digunakan untuk menyimpan nama produk seperti "Adidas" atau "Nike".
- **Harga Produk**:
  - Disimpan sebagai tipe data `INTEGER` (Laravel: `integer`).
  - Menyimpan harga produk dalam satuan mata uang tanpa desimal, seperti 1000, 999, dll.
- **Kategori Produk**:
  - Disimpan sebagai tipe data `ENUM` untuk membatasi nilai kategori hanya pada pilihan tertentu, yaitu:
    - "sepatu"
    - "baju"
    - "celana"

---

## 2. Alur Pengerjaan

### a. Migration
- Tabel `products` akan dibuat menggunakan migration.
- Kolom yang ditambahkan:
  - **id**: Primary key untuk produk.
  - **name**: Nama produk (`string`).
  - **price**: Harga produk (`integer`).
  - **category**: Kategori produk (`enum` dengan nilai "sepatu", "baju", "celana").
  - **timestamps**: Kolom bawaan Laravel untuk mencatat waktu pembuatan dan pembaruan data.

### b. Seeder
- Seeder akan digunakan untuk mengisi tabel `products` dengan data awal.
- Data awal yang akan diisi:
  1. Adidas - 1000 - Sepatu.
  2. Nike - 999 - Sepatu.
  3. Levis - 500 - Celana.
  4. Uniqlo - 100 - Baju.

### c. Model
- Model `Product` akan dibuat untuk merepresentasikan tabel `products` dalam Laravel.
- Atribut `fillable` akan digunakan untuk memungkinkan mass assignment pada kolom:
  - `name`
  - `price`
  - `category`

---

## 3. Langkah Implementasi

- Definisikan migration dengan kolom: `id`, `name`, `price`, dan `category`.
- Buat seeder untuk mengisi tabel.
- Isi Model `Product` untuk mengaitkan Model dengan Table

