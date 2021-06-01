<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_estado', function (Blueprint $table) {
            $table->unsignedInteger('proyecto_id');
            $table->foreign('proyecto_id', 'fk_estado_proyecto')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id', 'fk_proyectoestado_estado')->references('id')->on('estado')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('proyecto_estado');
    }
}
