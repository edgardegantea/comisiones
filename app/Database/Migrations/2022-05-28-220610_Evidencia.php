<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Evidencia extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'tipoevidencia' => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => false],
            'descripcion'   => ['type' => 'text'],
            'fechaEntrega'  => ['type' => 'datetime', 'null' => true]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('tipoevidencia', 'tipoevidencia', 'id');
        $this->forge->createTable('evidencia', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('evidencia', true);
    }
}
