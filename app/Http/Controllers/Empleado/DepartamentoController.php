<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionDepartamento;
use App\Models\Empleado\Departamento;
use App\Models\Empleado\Empleado;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::with('empleados:id,primer_nombre')->orderby('id')->get();
        return view('empleados.departamento.index', compact('departamentos'));
    }

    public function crear()
    {
        $empleados = Empleado::orderBy('id')->pluck('primer_nombre', 'id')->toArray();
        return view('empleados.departamento.crear', compact('empleados'));
    }

    public function guardar(ValidacionDepartamento $request)
    {
        $departamentos = Departamento::create($request->all());
        $departamentos->empleados()->attach($request->empleado_id);
        return redirect('empleado/departamento')->with('mensaje', 'Departamento creado con exito');
    }

    public function ver($id)
    {
        //
    }

    public function editar($id)
    {
        $empleados = Empleado::orderby('id')->pluck('primer_nombre', 'id')->toArray();
        $departamentos = Departamento::with('empleados')->findOrFail($id);
        return view('empleados.departamento.editar', compact('departamentos', 'empleados'));
    }

    public function actualizar(ValidacionDepartamento $request, $id)
    {
        $departamentos = Departamento::findOrFail($id);
        $departamentos->empleados()->sync($request->empleado_id);
        return redirect('empleado/departamento')->with('mensaje', 'Departamento actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            $departamentos = Departamento::findOrFail($id);
            $departamentos->empleados()->detach();
            return response()->json(['mensaje' => 'ok']);
        }else{
            abort(404);
        }
    }
}
