<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosAdicionalesEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('dias_libres');
            $table->integer('dias_faltantes');
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado', 'fk_empleados')->references('id_empleado')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('horas_tabajadas');
            $table->integer('domingos_trabajados');
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
        Schema::dropIfExists('datos_empleados');
    }
}
