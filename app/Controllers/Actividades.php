<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Actividad;

class Actividades extends BaseController
{
    public function index()
    {
        $model = model(Actividad::class);
        $data = ['actividades' => $model->getActividad()
            ];

        return view('layout/header')
        .view('actividad/index', $data)
        .view('layout/footer');
    }

    public function create(){
        return view('layout/header')
            .view('actividad/crear')
            .view('layout/footer');
    }

}
