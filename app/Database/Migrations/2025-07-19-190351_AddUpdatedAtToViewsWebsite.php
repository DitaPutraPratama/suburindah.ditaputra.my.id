<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToViewsWebsite extends Migration
{
    public function up()
    {
        $fields = [
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'after'   => 'created_at', // opsional, kalau mau urutan
            ],
        ];

        $this->forge->addColumn('ViewsWebsite', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('ViewsWebsite', 'updated_at');
    }
}
