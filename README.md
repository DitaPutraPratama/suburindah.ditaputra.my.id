# 🚀 Project CodeIgniter 4

Selamat datang di proyek CodeIgniter 4 ini. Jika Anda baru saja meng-clone repository ini, pastikan mengikuti langkah-langkah di bawah agar proyek dapat berjalan dengan lancar.

---

## ⚠️ Masalah Umum Setelah Clone

Setelah clone, Anda mungkin mengalami error seperti berikut saat menjalankan `php spark serve`:

```bash
Warning: require(.../vendor/codeigniter4/framework/system/Boot.php): Failed to open stream: No such file or directory
Fatal error: Uncaught Error: Failed opening required ...
```

### 🔍 Penyebab

Error ini terjadi karena folder `vendor/` tidak disertakan dalam repository. Folder ini dihasilkan oleh Composer dan berisi semua dependency proyek.

---

## ✅ Langkah-langkah Instalasi

### 1. Pastikan Composer Sudah Terpasang

Jalankan perintah berikut di terminal:

```bash
composer -V
```

Jika belum terpasang, Anda bisa download dan instal Composer dari:

👉 https://getcomposer.org/download/

### 2. Install Dependency via Composer

Masuk ke folder proyek, lalu jalankan:

```bash
composer install
```

Catatan: Jika terjadi error seperti file tidak bisa dihapus (EncrypterInterface.php), itu kemungkinan disebabkan oleh antivirus atau Windows Search Indexer. Solusi:

-   Tutup semua aplikasi yang mengakses folder proyek (VS Code, Explorer, dll)

-   Jalankan ulang composer install sebagai Administrator

### 3. Konfigurasi File .env

File .env berfungsi untuk menyimpan konfigurasi aplikasi seperti database, base URL, dan environment.

Jika file .env belum ada, salin dari contoh:

```bash
cp .env.example .env
```

Kemudian buka file .env dan edit konfigurasi berikut:

```
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080'

database.default.hostname = localhost
database.default.database = nama_database_anda
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

-   Ubah nama_database_anda, username, dan password sesuai konfigurasi lokal Anda.

### 4. Jalankan Aplikasi

Setelah semua siap, jalankan server lokal dengan:

```
php spark serve
```

Akses aplikasi melalui browser:

```
http://localhost:8080
```

---

## 🧰 Teknologi yang Digunakan

-   PHP 8.1 atau lebih baru

-   CodeIgniter 4

-   Composer

-   MySQL / MariaDB (default)

## 📌 Catatan Tambahan

Jangan mengubah isi folder vendor/ secara manual.

Semua konfigurasi penting diletakkan di file .env.

Untuk deploy ke production, ubah:

```
CI_ENVIRONMENT = production
```
