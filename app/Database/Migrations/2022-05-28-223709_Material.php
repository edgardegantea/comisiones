<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Material extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'material'          => ['type' => 'text'],
            'disponibilidad'    => ['type' => 'boolean'],
            'estado'            => ['type' => 'varchar', 'constraint' => 20],
            'descripcion'       => ['type' => 'text'],
            'fechaEntrega'      => ['type' => 'datetime', 'null' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('material', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('material', true);
    }
}
