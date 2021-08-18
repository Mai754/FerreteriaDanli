<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosCompradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_comprados', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("id_compra");
            $table->foreign("id_compra", 'fk_producto_compra')
                ->references("id")
                ->on("compras")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string('codigo_producto');
            $table->string('nombre_producto');
            $table->decimal('precio', 9, 2);
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_comprados');
    }
}
