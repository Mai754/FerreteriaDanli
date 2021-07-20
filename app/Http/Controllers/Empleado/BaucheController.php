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

        //$sueldos = Sueldo::with('departamentos:id,Nombre_departamento')->orderby('id')->get();
        //$sueldos = Sueldo::with('empleados:id,primer_nombre')->orderby('id')->get();
        return view('empleados.bauche.index', compact('sueldos', 'texto'));
    }
    public function crear($id)
    {
        $buaches = DB::table('view_bauche')
                    ->where('id', $id);
        $buaches = $buaches->get();
        return view('empleados.bauche.crear', compact('buaches'));
    }
    public function guardar(ValidacionBauche $request)
    {
        
    }
    public function ver($id)
    {
        
    }
    public function editar($id)
    {
        
    }
    public function actualizar(ValidacionBauche $request, $id)
    {
        
    }
    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            if(Bauche::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
