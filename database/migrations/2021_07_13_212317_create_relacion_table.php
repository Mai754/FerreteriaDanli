<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion', function (Blueprint $table) {
            $table->unsignedInteger('departamento_id');
            $table->foreign('departamento_id', 'fk_relacion_departamento')->references('id')->on('departamento')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_relacion_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('sueldo_id');
            $table->foreign('sueldo_id', 'fk_relacion_sueldo')->references('id')->on('sueldo')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('relacion');
    }
}
