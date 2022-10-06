<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueaderos', function (Blueprint $table) {
            $table->id();
            $table->string('lote', 2);
            $table->boolean('disponibilidad');
            $table->time('hora_ingreso');
            $table->time('hora_egreso');
            $table->date('dia');

            $table->foreignId('tipoVehiculo_id');
            $table->foreign('tipoVehiculo_id')->references('id')->on('tipo_vehiculo')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('parqueaderos');
    }
};
