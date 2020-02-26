<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['nit', 'nombre', 'direccion', 'encargado', 'telefono', 'email'];
}
