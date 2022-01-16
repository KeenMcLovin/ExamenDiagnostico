<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Alumnos;
use App\Models\Grupos;

class escuela extends Controller
{
    public function lista () {
        $datos = Alumnos::all();

        return view ('lista_alumnos')
             ->with(['datos' => $datos]);
    }

    public function insert (Request $request) {
        Log::alert($request);
        try {
            $creando                  = new Alumnos;
            $creando->nombre          = $request['nombre'];
            $creando->fechaNacimiento = Carbon::parse($request['fechaNacimiento']);
            $creando->gen             = $request['gen'];
            $creando->matricula       = $request['matricula'];
            $creando->direccion       = $request['direccion'];
            $creando->email           = $request['email'];
            $creando->pass            = $request['pass'];
            $creando->save();

            return 'Registro Exitoso';
        } catch (\Exception $exception) {
            Log::error($exception);
            return 'Error al registrar';
        }
    }
}
