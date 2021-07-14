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
        $sueldos = DB::table('sueldo')
                    ->select('id', 'Sueldo')
                    ->where('Sueldo', 'LIKE', '%'.$texto.'%')
                    ->orderBy('id', 'asc')
                    ->paginate(10);

        $sueldos = Sueldo::with('departamentos:id,Nombre_departamento')->orderby('id')->get();
        $sueldos = Sueldo::with('tipos:id,tipo')->orderby('id')->get();
        $sueldos = Sueldo::with('empleados:id,primer_nombre')->orderby('id')->get();
        $buaches = Bauche::orderby('id')->get();
        return view('empleados.bauche.index', compact('buaches', 'sueldos', 'texto'));
    }
    public function crear()
    {
        
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
