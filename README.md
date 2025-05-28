# Project CodeIgniter 4

## ⚠️ Masalah Umum Setelah Clone Repo

Jika setelah meng-clone project ini dan menjalankan `php spark serve` muncul error seperti:

Warning: require(.../vendor/codeigniter4/framework/system/Boot.php): Failed to open stream: No such file or directory
Fatal error: Uncaught Error: Failed opening required ...

yaml
Copy
Edit

Itu berarti folder `vendor/` belum ada karena tidak disertakan dalam repository. Folder ini berisi dependensi dari Composer.

---

## ✅ Cara Mengatasi

Ikuti langkah-langkah berikut untuk membuat proyek bisa dijalankan:

### 1. Pastikan Composer Sudah Terinstal

Cek dengan perintah:

```bash
composer -V
Jika belum ada, silakan download dan install dari https://getcomposer.org.

2. Install Dependency dengan Composer
Masuk ke folder proyek:

bash
Copy
Edit
cd nama-folder-proyek
Lalu jalankan:

bash
Copy
Edit
composer install
Jika terjadi error karena file tidak bisa dihapus (seperti EncrypterInterface.php), tutup aplikasi yang sedang membuka folder proyek (termasuk VS Code), lalu jalankan ulang composer install di terminal dengan mode administrator.

3. Copy File .env
Jika file .env belum ada:

bash
Copy
Edit
cp .env.example .env
Atur konfigurasi database, base URL, dan lain-lain sesuai kebutuhan di dalam file .env.

4. Jalankan Proyek
Setelah selesai, jalankan server lokal:

bash
Copy
Edit
php spark serve
Buka browser di http://localhost:8080

🛠 Fitur Lain
Framework: CodeIgniter 4

Composer untuk manajemen dependensi

Direkomendasikan menggunakan PHP 8.1 atau lebih baru

📌 Catatan
Jika masih mengalami error, pastikan:

PHP dan Composer sudah benar-benar terpasang

Folder proyek tidak dikunci antivirus atau search indexer

File .env sudah dikonfigurasi
```
