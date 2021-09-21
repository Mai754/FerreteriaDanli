<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_proveedor');
            $table->foreign("id_proveedor", 'fk_compra_proveedor')
                ->references("id")
                ->on("proveedores")
                ->onDelete("cascade")
                ->onUpdate("cascade");
                $table->unsignedInteger('id_empleado');
            $table->foreign("id_empleado", 'fk_compra_empleado')
                ->references("id")
                ->on("empleado")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
        Schema::dropIfExists('compras');
    }
}
