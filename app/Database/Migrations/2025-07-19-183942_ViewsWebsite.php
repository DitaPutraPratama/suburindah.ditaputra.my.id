<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ViewsWebsite extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_views'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'page'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'total' => [
                'type' => 'int',
                'constraint' => '150',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_views', true);
        $this->forge->createTable('ViewsWebsite');
    }

    public function down()
    {
        $this->forge->dropTable('ViewsWebsite');
    }
}
