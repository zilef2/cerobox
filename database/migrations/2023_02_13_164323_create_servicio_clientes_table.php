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
        Schema::create('servicio_clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                    ->references('id')
                    ->on('clientes')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')
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
        Schema::dropIfExists('servicio_clientes');
    }
};
