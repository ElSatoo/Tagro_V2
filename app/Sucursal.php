<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $fillable = ['empresa_id', 'region_id', 'sucursal', 'descripcion', 'serial', 'habilitar'];
}
