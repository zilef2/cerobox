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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('Nombre');
            $table->string('Imagen')->nullable();
            $table->string('Fecha_inicio');
            $table->string('Fecha_fin');
            $table->string('Observaciones');

            $table->unsignedBigInteger('tipo_servicio_id');
             
            $table->foreign('Tipo_servicio_id')
                    ->references('id')
                    ->on('tipo_servicios')
                    ->onDelete('cascade');
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
};
