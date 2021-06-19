<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionDepartamento;
use App\Models\Empleado\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::orderby('id')->get();
        return view('empleados.departamento.index', compact('departamentos'));
    }

    public function crear()
    {
        return view('empleados.departamento.crear');
    }

    public function guardar(ValidacionDepartamento $request)
    {
        Departamento::create($request->all());
        return redirect('empleado/departamento')->with('mensaje', 'Departamento creado con exito');
    }

    public function ver($id)
    {
        //
    }

    public function editar($id)
    {
        $departamentos = Departamento::findOrFail($id);
        return view('empleados.departamento.editar', compact('departamentos'));
    }

    public function actualizar(ValidacionDepartamento $request, $id)
    {
        Departamento::findOrFail($id)->update($request->all());
        return redirect('empleado/departamento')->with('mensaje', 'Departamento actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            if(Departamento::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
