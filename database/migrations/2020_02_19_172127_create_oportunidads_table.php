<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOportunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidads', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('oportunidad');
            
           
            $table->date('fecha_inicio');
            $table->date('fecha_compromiso');
            $table->string('prioridad');
            $table->string('compromiso_activacion');
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->integer('comercial')->unsigned();
            $table->foreign('comercial')->references('id')->on('empleados')->onDelete('cascade');
            $table->integer('ingeniero_preventa')->unsigned();
            $table->foreign('ingeniero_preventa')->references('id')->on('ingenieros')->onDelete('cascade');
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
        Schema::dropIfExists('oportunidads');
    }
}
