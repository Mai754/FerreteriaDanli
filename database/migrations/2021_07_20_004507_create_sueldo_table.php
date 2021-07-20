<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSueldoTable extends Migration
{
    public function up()
    {
        Schema::create('sueldo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Sueldo');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sueldo');
    }
}
