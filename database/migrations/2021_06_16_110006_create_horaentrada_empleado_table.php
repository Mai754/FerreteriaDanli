<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoraentradaEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaentrada_empleado', function (Blueprint $table) {
            $table->unsignedInteger('horaentrada_id');
            $table->foreign('horaentrada_id', 'fk_empleado_horaentrada')->references('id')->on('horaentrada')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_horaentrada_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('horaentrada_empleado');
    }
}
