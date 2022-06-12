<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoComision extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'tipocomision'  => ['type' => 'varchar', 'constraint' => 250],
            'descripcion'   => ['type' => 'text'],
            'disponible'    => ['type' => 'boolean']
            ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tipocomision', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tipocomision', true);
    }
}