<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    public $timestamps = false;
    protected $table = 'tblgrupos';
    protected $primaryKey = 'id';
    protected $fillable = [
        "nombre",
        "calve",
        "created_at",
        "updated_at"
    ];
    protected $hidden = ['created_at', 'updated_at'];
    public $sequence = null;
}
