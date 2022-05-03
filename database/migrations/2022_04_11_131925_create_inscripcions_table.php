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
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('phone');
            $table->string('email');
            $table->text('llega')->nullable();
            $table->string('facturacion')->nullable();
            $table->text('dieta')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('pago')->nullable();
            $table->string('estado_pago')->nullable();
            $table->decimal('total_pago',6,2)->nullable();
            $table->string('estado_participacion')->default('inscripto');// confirmado, pagado, listo.
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
        Schema::dropIfExists('inscripcions');
    }
};
