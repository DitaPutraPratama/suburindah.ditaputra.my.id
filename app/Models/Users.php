<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    // Menentukan nama tabel yang digunakan
    protected $table = 'users';

    // Menentukan primary key dari tabel
    protected $primaryKey = 'id';

    // Tipe data pengembalian, bisa 'array' atau 'object'
    protected $returnType = 'array';

    // Kolom yang boleh diisi saat insert atau update
    protected $allowedFields = ['username', 'email', 'password', 'role'];

    // Mengaktifkan fitur otomatis untuk mengelola created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
