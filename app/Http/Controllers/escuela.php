<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Alumnos;
use App\Models\Grupos;

class escuela extends Controller
{
    public function detalle ($id) {
        $alumno = Alumnos::find($id);
        return view('detalle')
             ->with(['alumno' => $alumno]);
    }

    public function datosLista () {
        $datos = Alumnos::all();
        return $datos;
    }

    public function lista () {
        $datos = $this->datosLista();
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

            $datos = $this->datosLista();$datos = $this->datosLista();

            return view("lista")
                 ->with(['mensaje' => "Todo bien"])
                 ->with(['datos' => $datos]);
        } catch (\Exception $exception) {
            Log::error($exception);
            return 'Error al registrar';
        }
    }

    public function editar (Alumnos $id) {
        $grupos = Grupos::all();
        
        return view("editar")
             ->with(['alumno'=>$id])
             ->with(['grupos'=>$grupos]);
    }

    public function salvar (Alumnos $id, Request $request) {
        $update = Alumnos::find($id->id);
        $update->nombre          = $request['nombre'];
        $update->fechaNacimiento = Carbon::parse($request['fechaNacimiento']);
        $update->gen             = $request['gen'];
        $update->matricula       = $request['matricula'];
        $update->direccion       = $request['direccion'];
        $update->email           = $request['email'];
        $update->pass            = $request['pass'];
        $update->save();

        return redirect()->route("detalle",['id' => $id->id]);
    }

    public function borrar (Alumnos $id) {
        $id->delete();
        return redirect()->route("lista");
    }
}
