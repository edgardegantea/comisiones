<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Actividades extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'material'          => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => false],
            'evidencia'         => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => false],
            'prioridad'         => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => false],
            'horasactividad'    => ['type' => 'smallint', 'null' => true],
            'descripcion'       => ['type' => 'text'],
            'observaciones'     => ['type' => 'text'],
            'fechainicio'       => ['type' => 'datetime', 'null' => true],
            'fechafin'          => ['type' => 'datetime', 'null' => true],
            'lugar'             => ['type' => 'text'],
            'objetivoactividad' => ['type' => 'text'],
            'tituloactividad'   => ['type' => 'text']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('material', 'material', 'id');
        $this->forge->addForeignKey('evidencia', 'evidencia', 'id');
        $this->forge->addForeignKey('prioridad', 'prioridad', 'id');
        $this->forge->createTable('actividades', true);

        $this->db->enableForeignKeyChecks();

    }

    public function down()
    {
        $this->forge->dropTable('actividades', true);
    }
}
