<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion_web', 'direccion', 'habilitar'];
}
