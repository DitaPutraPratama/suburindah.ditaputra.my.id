<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewsWebsite extends Model
{
    // Menentukan nama tabel yang digunakan
    protected $table = 'viewswebsite';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id_views';

    // Tipe data pengembalian, bisa 'array' atau 'object'
    protected $returnType = 'array';

    // Kolom yang boleh diisi saat insert atau update
    protected $allowedFields = ['page', 'total'];

    // Mengaktifkan fitur otomatis untuk mengelola created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField = 'updated_at';
}
