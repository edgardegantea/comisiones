<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comision extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'tipoComision'  => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => false],
            'titulo'        => ['type' => 'varchar', 'constraint' => 250],
            'descripcion'   => ['type' => 'text'],
            'fechaInicio'   => ['type' => 'datetime', 'null' => true],
            'fechaEntrega'  => ['type' => 'datetime', 'null' => true],
            'fechaFin'      => ['type' => 'datetime', 'null' => true],
            'actividad'     => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => false],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('tipoComision', 'tipocomision', 'id');
        $this->forge->addForeignKey('actividad', 'actividades', 'id');

        $this->forge->createTable('comisiones', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('comisiones', true);
    }
}
