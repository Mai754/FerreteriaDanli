<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateViewBaucheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" CREATE VIEW view_bauche as 
            select e.id, e.primer_nombre, e.segundo_nombre, e.primer_apellido, e.segundo_apellido, 
            e.DNI_empleado, d.Nombre_departamento, sl.Sueldo as sueldo_bruto, sl.Sueldo*0.02 as IHSS, 
            sl.Sueldo*0.015 as RAP, sl.Sueldo*0.06 as CICP,sl.Sueldo*0.15 as ISR, 
            sl.Sueldo-sl.Sueldo*0.02-sl.Sueldo*0.015-sl.Sueldo*0.06-sl.Sueldo*0.15 as sueldo_neto
            from sueldo_empleado s 
            join empleado e on s.empleado_id = e.id 
            join empleado_departamento ed on ed.empleado_id = e.id 
            join departamento d on ed.departamento_id = d.id 
            join sueldo sl on sl.id = s.Sueldo_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW view_bauche");
    }
}
