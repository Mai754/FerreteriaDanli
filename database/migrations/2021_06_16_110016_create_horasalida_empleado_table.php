<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorasalidaEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horasalida_empleado', function (Blueprint $table) {
            $table->unsignedInteger('horasalida_id');
            $table->foreign('horasalida_id', 'fk_empleado_horasalida')->references('id')->on('horasalida')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_horasalida_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horasalida_empleado');
    }
}
