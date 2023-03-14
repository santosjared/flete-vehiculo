<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 20)->default('Activo');
            $table->timestamps();
        });

        Schema::create('estado_vehiculo', function (Blueprint $table) {
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->integer('tiempo')->default(0);
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
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
        Schema::dropIfExists('estado_vehiculo');
        Schema::dropIfExists('estados');
    }
}
