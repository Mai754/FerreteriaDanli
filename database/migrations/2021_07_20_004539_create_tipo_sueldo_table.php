<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSueldoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_sueldo', function (Blueprint $table) {
            $table->unsignedInteger('sueldo_id');
            $table->foreign('sueldo_id', 'fk_tipo_sueldo')->references('id')->on('sueldo')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('tipo_id');
            $table->foreign('tipo_id', 'fk_sueldo_tipo')->references('id')->on('tipo_pago')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tipo_sueldo');
    }
}
