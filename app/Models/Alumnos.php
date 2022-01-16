<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    public $timestamps = false;
    protected $table = 'tblalumnos';
    protected $primaryKey = 'id';
    protected $fillable = [
        "nombre",
        "fechaNacimiento",
        "gen",
        "matricula",
        "direccion",
        "email",
        "pass",
        "foto",
        "id_grupo",
        "created_at",
        "updated_at"
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public $sequence = null;
}
