<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_cliente', function (Blueprint $table) {
            $table->unsignedInteger('proyecto_id');
            $table->foreign('proyecto_id', 'fk_proyectocliente_proyecto')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id', 'fk_clienteproyecto_cliente')->references('id')->on('cliente')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('proyecto_cliente');
    }
}
