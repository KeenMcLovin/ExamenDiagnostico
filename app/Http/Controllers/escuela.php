<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Grupos;

class escuela extends Controller
{
    public function lista () {
        $datos = Alumnos::all();

        return view ('lista_alumnos')
        ->with(['datos' => $datos]);
    }
}
