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
            e.DNI_empleado, d.Nombre_departamento, sl.Sueldo as sueldo_bruto, sl.Sueldo*0.16 as septimo,
            (sl.Sueldo*1.16) as ingresos_neto,
            sl.Sueldo  + sl.Sueldo * 0.16 as pago_neto
            from sueldo_empleado s 
            join empleado e on s.empleado_id = e.id 
            join sueldo sl on sl.id = s.Sueldo_id
            join sueldo_departamento ed on ed.sueldo_id = sl.id 
            join departamento d on ed.departamento_id = d.id 
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
