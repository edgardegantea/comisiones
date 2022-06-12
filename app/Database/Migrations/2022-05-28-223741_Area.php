<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Area extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'descripcion'   => ['type' => 'text']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('area', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('area', true );
    }
}
