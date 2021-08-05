<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionBauche;
use App\Models\Empleado\Bauche;
use App\Models\Empleado\Sueldo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaucheController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        
        $sueldos = DB::table('sueldo_empleado')
                    ->join('empleado','empleado_id', '=', 'empleado.id')
                    ->join('sueldo','sueldo_id', '=', 'sueldo.id')
                    ->join('sueldo_departamento','sueldo_departamento.sueldo_id', '=', 'sueldo.id')
                    ->join('departamento','sueldo_departamento.departamento_id', '=', 'departamento.id')
                    ->select('empleado_id', 'sueldo.id','empleado.primer_nombre', 'departamento.Nombre_departamento', 'sueldo.Sueldo')
                    ->where(function ($query) use($texto){
                        $query
                        ->orwhere('empleado.primer_nombre', 'LIKE', '%'.$texto.'%')
                        ->orwhere('departamento.Nombre_departamento', 'LIKE', '%'.$texto.'%')
                        ->orwhere('sueldo.Sueldo', 'LIKE', '%'.$texto.'%');
                    })
                    ->orderBy('empleado.id', 'asc')
                    ->paginate(10);

        return view('empleados.bauche.index', compact('sueldos', 'texto'));
    }
    public function crear($id)
    {
        $buaches = DB::table('view_bauche')
                    ->where('id', $id);
        $buaches = $buaches->get();

        /*$buaches = DB::table('sueldo_empleado')
                    ->join('empleado','sueldo_empleado.empleado_id','=','empleado.id')
                    ->join('empleado_departamento','empleado_departamento.empleado_id','=','empleado.id')
                    ->join('departamento','empleado_departamento.departamento_id','=','departamento.id')
                    ->join('sueldo','sueldo.id','=','sueldo_empleado.Sueldo_id')
                    ->select('empleado.primer_nombre','empleado.segundo_nombre','empleado.primer_apellido','empleado.segundo_apellido',
                            'empleado.DNI_empleado', 'departamento.Nombre_departamento','sueldo.Sueldo as Sueldo', 
                            'sueldo.Sueldo * 0.02 as IHSS', 'sueldo.Sueldo * 0.015 as RAP', 'sueldo.Sueldo * 0.06 as CICP',
                            'sueldo.Sueldo * 0.15 as ISR', 
                            'sueldo.Sueldo - sueldo.Sueldo * 0.02 - sueldo.Sueldo * 0.015 - sueldo.Sueldo * 0.06 - sueldo.Sueldo * 0.015 as sueldo_neto')
                    ->where('id', $id);*/

        return view('empleados.bauche.crear', compact('buaches'));
    }
}
