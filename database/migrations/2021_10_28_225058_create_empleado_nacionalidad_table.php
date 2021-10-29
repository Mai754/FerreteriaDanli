<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoNacionalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_nacionalidad', function (Blueprint $table) {
            $table->unsignedInteger('nacionalidad_id');
            $table->foreign('nacionalidad_id', 'fk_nacionalidad_empleado')->references('id')->on('nacionalidad')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_empleado_nacionalidad')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('empleado_nacionalidad');
    }
}
