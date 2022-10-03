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
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->string('parking_lot')->unique();
            $table->boolean('availability');
            $table->timestamps('time_admission');
            $table->timestamps('time_departure');
            $table->time(hora);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkings');
    }
};
