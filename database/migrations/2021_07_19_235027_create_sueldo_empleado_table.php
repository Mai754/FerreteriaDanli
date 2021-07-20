<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSueldoEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sueldo_empleado', function (Blueprint $table) {
            $table->unsignedInteger('sueldo_id');
            $table->foreign('sueldo_id', 'fk_empleado_sueldo')->references('id')->on('sueldo')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id')->unique();
            $table->foreign('empleado_id', 'fk_sueldo_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('sueldo_empleado');
    }
}
