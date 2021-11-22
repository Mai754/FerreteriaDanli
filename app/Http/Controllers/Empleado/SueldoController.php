<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionSueldo;
use App\Models\Empleado\Departamento;
use App\Models\Empleado\Empleado;
use App\Models\Empleado\Sueldo;
use App\Models\Empleado\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SueldoController extends Controller
{
    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));

        $sueldos = DB::table('sueldo')
                    ->join('sueldo_empleado','sueldo.id','=','sueldo_empleado.sueldo_id')
                    ->join('empleado','sueldo_empleado.empleado_id','=','empleado.id')
                    ->join('sueldo_departamento','sueldo.id','=','sueldo_departamento.sueldo_id')
                    ->join('departamento','sueldo_departamento.departamento_id','=','departamento.id')
                    ->join('tipo_sueldo','sueldo.id','=','tipo_sueldo.sueldo_id')
                    ->join('tipo_pago','tipo_sueldo.tipo_id','=','tipo_pago.id')
                    ->select('sueldo.id','tipo_pago.tipo','empleado.primer_nombre', 'departamento.Nombre_departamento', 'sueldo.Sueldo')
                    ->where(function ($query) use($texto){
                        $query
                        ->orwhere('empleado.primer_nombre', 'LIKE', '%'.$texto.'%')
                        ->orwhere('departamento.Nombre_departamento', 'LIKE', '%'.$texto.'%')
                        ->orwhere('sueldo.Sueldo', 'LIKE', '%'.$texto.'%')
                        ->orwhere('tipo_pago.tipo', 'LIKE', '%'.$texto.'%');
                    })
                    ->orderBy('sueldo.id', 'asc')
                    ->paginate(10);

        return view('empleados.sueldo.index', compact('sueldos', 'texto'));
    }

    public function crear()
    {
        $departamentos = Departamento::orderBy('id')->pluck('Nombre_departamento', 'id')->toArray();
        $tipos = Tipo::orderBy('id')->pluck('tipo', 'id')->toArray();
        $empleados = Empleado::orderBy('id')->pluck('primer_nombre', 'id')->toArray();
        return view('empleados.sueldo.crear', compact('departamentos', 'tipos', 'empleados'));
    }

    public function guardar(ValidacionSueldo $request)
    {
        $sueldos = Sueldo::create($request->all());
        $sueldos->departamentos()->attach($request->departamento_id);
        $sueldos->tipos()->attach($request->tipo_id);
        $sueldos->empleados()->attach($request->empleado_id);
        return redirect('empleado/sueldo')->with('mensaje', 'Sueldo creado con exito');
    }

    public function ver($id)
    {
        //
    }

    public function editar($id)
    {
        $departamentos = Departamento::orderby('id')->pluck('Nombre_departamento', 'id')->toArray();
        $tipos = Tipo::orderby('id')->pluck('tipo', 'id')->toArray();
        $empleados = Empleado::orderby('id')->pluck('primer_nombre', 'id')->toArray();
        $sueldos = Sueldo::with('departamentos')->findOrFail($id);
        $sueldos = Sueldo::with('tipos')->findOrFail($id);
        $sueldos = Sueldo::with('empleados')->findOrFail($id);
        return view('empleados.sueldo.editar', compact('sueldos', 'departamentos', 'tipos', 'empleados'));
    }

    public function actualizar(ValidacionSueldo $request, $id)
    {
        $sueldos = Sueldo::findOrFail($id);
        $sueldos->update($request->all());
        $sueldos->departamentos()->sync($request->departamento_id);
        $sueldos->tipos()->sync($request->tipo_id);
        $sueldos->empleados()->sync($request->empleado_id);
        return redirect('empleado/sueldo')->with('mensaje', 'Sueldo actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            $sueldos = Sueldo::findOrFail($id);
            $sueldos->departamentos()->detach();
            $sueldos->tipos()->detach();
            $sueldos->empleados()->detach();
            $sueldos->delete();
            return response()->json(['mensaje' => 'ok']);
        }else{
            abort(404);
        }
    }
}
