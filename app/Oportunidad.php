<?php

namespace App;
use App\Scopes\AgeScope;

use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    protected $table = 'oportunidads';
    protected $primaryKey = 'id';

    protected $fillable = ['oportunidad', 'comercial', 'ingeniero_preventa', 'fecha_inicio', 'fecha_compromiso', 'prioridad', 'compromiso_activacion', 'id_cliente'];

    
    public function scopeSearch($query, $buscarpor){
        if($buscarpor)
        return $query->where('oportunidad', 'LIKE', "%$buscarpor%");
    }
}

