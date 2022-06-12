<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Actividades extends BaseController
{
    public function index()
    {
        return view('actividad/index');
    }
}
