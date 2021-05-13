<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('device_types_id')->constrained('device_types');
            $table->foreignId('users_id')->references('id')->on('users');
            $table->string('serial');
            $table->string('location');
            $table->char('status')->default('1')->nullable(); // si el dispositivo se encuentra encendido o apagado
            $table->char('state')->default('1')->nullable(); //si es dispositivo se encuentra activo o inactivo
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
        Schema::dropIfExists('devices');
    }
}
