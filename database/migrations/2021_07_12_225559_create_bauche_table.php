<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaucheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bauche', function (Blueprint $table) {
            $table->increments('id');
            $table->double('devengado_semanal');
            $table->double('horas_extras');
            $table->double('deducciones_ihss');
            $table->double('pago_por_ventas');
            $table->double('septimo_dia');
            $table->timestamps();
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
        Schema::dropIfExists('bauche');
    }
}
