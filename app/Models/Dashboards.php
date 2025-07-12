<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboards extends Model
{
    protected $table = 'contact_messages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'message', 'created_at'];
}
