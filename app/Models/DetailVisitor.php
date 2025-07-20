<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailVisitor extends Model
{
    protected $table            = 'detailvisitor';
    protected $primaryKey       = 'id_visitor';
    protected $allowedFields    = ['ipaddress', 'useragent'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField = '';
}
