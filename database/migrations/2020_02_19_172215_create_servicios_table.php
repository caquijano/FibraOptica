<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->string('sid');
            $table->string('servicio');
            $table->string('tipo');
            $table->string('medio');
            $table->string('bw');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('telefono');
            $table->text('descripcion');
            $table->date('fecha_contratacion');
            $table->date('fecha_proveedor');
            $table->date('fecha_costos');
            $table->integer('tiempo_contrato');
            $table->string('tercero');
            $table->string('os');
            $table->integer('mrc_cliente');
            $table->integer('nrc_cliente');
            $table->integer('inversion_cliente');
            $table->integer('gasto_cliente');
            $table->integer('inversion_tercero');
            $table->integer('gasto_tercero');
            $table->integer('obra_civil');
            $table->string('observacion_obra');
            $table->date('fecha_entrega_tercero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
