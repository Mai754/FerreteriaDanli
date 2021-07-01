<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSueldoDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sueldo_departamento', function (Blueprint $table) {
            $table->unsignedInteger('sueldo_id');
            $table->foreign('sueldo_id', 'fk_departamento_sueldo')->references('id')->on('sueldo')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('departamento_id');
            $table->foreign('departamento_id', 'fk_sueldo_departamento')->references('id')->on('departamento')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('sueldo_departamento');
    }
}
