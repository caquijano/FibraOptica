<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
   protected $table='servicios';
    protected $fillable=['id','sid', 'servicio', 'tipo', 'medio', 'bw', 'direccion', 'ciudad', 'telefono','descripcion', 'fecha_contratacion', 'fecha_proveedor', 'fecha_costos','tiempo_contrato','tercero', 'os','mrc_cliente', 'nrc_cliente','inversion_cliente','gasto_cliente','inversion_tercero','gasto_tercero','obra_civil','observacion_obra','fecha_entrega_tercero'];
    public function oportunidad()
    {
        return $this->belongsTo('App\Oportunidad');
    }
    public function suministro()
    {
        return $this->hasMany('App\Suministros');
    }
}
