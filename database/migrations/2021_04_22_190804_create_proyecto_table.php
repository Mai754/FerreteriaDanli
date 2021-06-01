<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTable extends Migration
{
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_del_proyecto', 20);
            $table->string('descripcion', 500);
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id', 'fk_proyecto_cliente')->references('id')->on('cliente')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_proyecto_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id', 'fk_proyecto_estado')->references('id')->on('estado')->onDelete('restrict')->onUpdate('restrict');
            $table->double('presupuesto');
            $table->double('cantidad_gastada');
            $table->integer('duracion_del_proyecto');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
