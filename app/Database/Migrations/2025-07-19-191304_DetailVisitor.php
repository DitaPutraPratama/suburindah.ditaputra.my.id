<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailVisitor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_visitor'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ipaddress'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'useragent' => [
                'type' => 'int',
                'constraint' => '150',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'update_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_visitor', true);
        $this->forge->createTable('DetailVisitor');
    }

    public function down()
    {
        $this->forge->dropTable('DetailVisitor');
    }
}
