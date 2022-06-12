<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoEvidencia extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' =>12, 'unsigned' => true, 'auto_increment' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 50],
            'tipo'          => ['type' => 'varchar', 'constraint' => 250],
            'descripcion'   => ['type' => 'text']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tipoevidencia', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tipoevidencia', true);
    }
}