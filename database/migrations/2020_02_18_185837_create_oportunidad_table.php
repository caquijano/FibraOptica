<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOportunidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidad', function (Blueprint $table) {
            $table->string('id');
            $table->string('comercial');
            $table->string('ingeniero_preventa');
            $table->date('fecha_inicio');
            $table->date('fecha_compromiso');
            $table->string('prioridad');
            $table->date('compromiso_activacion');
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
        Schema::dropIfExists('oportunidad');
    }
}
