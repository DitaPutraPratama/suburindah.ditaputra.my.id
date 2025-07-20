<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUserAgentTypeInDetailVisitor extends Migration
{
    public function up()
    {
        $fields = [
            'useragent' => [
                'name'       => 'useragent',      // nama kolom tetap
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'null'       => true,
            ],
        ];

        $this->forge->modifyColumn('detailvisitor', $fields);
    }

    public function down()
    {
        // Kembalikan ke INT(150) jika dibatalkan
        $fields = [
            'useragent' => [
                'name'       => 'useragent',
                'type'       => 'INT',
                'constraint' => 150,
                'null'       => true,
            ],
        ];

        $this->forge->modifyColumn('detailvisitor', $fields);
    }
}
