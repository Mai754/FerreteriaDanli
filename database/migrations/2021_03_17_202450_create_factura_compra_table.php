<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_compra', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigo_factura', 8);
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id', 'fk_facturaC_empleado')->references('id')->on('empleado')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('proveedor_id');
            $table->foreign('proveedor_id', 'fk_facturaC_proveedor')->references('id')->on('proveedores')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('factura_compra');
    }
}
