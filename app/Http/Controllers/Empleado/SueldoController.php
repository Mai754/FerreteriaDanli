<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionSueldo;
use App\Models\Empleado\Departamento;
use App\Models\Empleado\Sueldo;
use App\Models\Empleado\Tipo;
use Illuminate\Http\Request;

class SueldoController extends Controller
{
    public function index()
    {
        $sueldos = Sueldo::with('departamentos:id,Nombre_departamento')->orderby('id')->get();
        $sueldos = Sueldo::with('tipos:id,tipo')->orderby('id')->get();
        return view('empleados.sueldo.index', compact('sueldos'));
    }

    public function crear()
    {
        $departamentos = Departamento::orderBy('id')->pluck('Nombre_departamento', 'id')->toArray();
        $tipos = Tipo::orderBy('id')->pluck('tipo', 'id')->toArray();
        return view('empleados.sueldo.crear', compact('departamentos', 'tipos'));
    }

    public function guardar(ValidacionSueldo $request)
    {
        $sueldos = Sueldo::create($request->all());
        $sueldos->departamentos()->attach($request->departamento_id);
        $sueldos->tipos()->attach($request->tipo_id);
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
        $sueldos = Sueldo::with('departamentos')->findOrFail($id);
        $sueldos = Sueldo::with('tipos')->findOrFail($id);
        return view('empleados.sueldo.editar', compact('sueldos'));
    }

    public function actualizar(ValidacionSueldo $request, $id)
    {
        $sueldos = Sueldo::findOrFail($id);
        $sueldos->departamentos()->sync($request->departamento_id);
        $sueldos->tipos()->sync($request->tipo_id);
        return redirect('empleado/sueldo')->with('mensaje', 'Sueldo actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            $sueldos = Sueldo::findOrFail($id);
            $sueldos->departamentos()->detach();
            $sueldos->tipos()->detach();
            return response()->json(['mensaje' => 'ok']);
        }else{
            abort(404);
        }
    }
}
