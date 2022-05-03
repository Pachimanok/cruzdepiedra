<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->date('FechaInicio');	
            $table->time('horaInicio');	
            $table->date('FechaFin');	
            $table->time('horaFin');	
            $table->string('imagen')->nullable();
            $table->string('seccion'); //hombres, mujeres
            $table->string('tipo'); // retiro, convivencia, Otros
            $table->decimal('precio',6,2);
            $table->string('estado')->default('abierta'); // cerrada, lleno
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
        Schema::dropIfExists('actividads');
    }
};
