<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoSexoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_sexo', function (Blueprint $table) {
            $table->unsignedInteger('sexo_id');
            $table->foreign('sexo_id', 'fk_sexo_empleado')->references('id')->on('sexo')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_empleado_sexo')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('empleado_sexo');
    }
}
