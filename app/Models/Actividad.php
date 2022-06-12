<?php

namespace App\Models;

use CodeIgniter\Model;

class Actividad extends Model
{

    protected $DBGroup          = 'default';
    protected $table            = 'actividades';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'material',
        'evidencia',
        'prioridad',
        'horasactividad',
        'descripcion',
        'observaciones',
        'fechainicio',
        'fechafin',
        'lugar',
        'objetivoactividad',
        'tituloactividad'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

public function getActividad(){

    return $this->findAll();
}
}
