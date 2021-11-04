<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->char('DNI_empleado', 13);
            $table->string('primer_nombre', 15);
            $table->string('segundo_nombre', 15);
            $table->string('primer_apellido', 15);
            $table->string('segundo_apellido', 15);
            $table->date('fecha_ingreso');
            $table->date('fecha_de_nacimiento');
            $table->string('direccion', 100);
            $table->char('telefono', 8)->nullable();
            $table->char('contacto_de_emergencia', 8)->nullable();
            $table->string('foto', 100)->nullable();
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
        Schema::dropIfExists('empleado');
    }
}
