<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionEmpleado;
use App\Models\Empleado\Empleado;
use App\Models\Empleado\Nacionalidad;
use App\Models\Empleado\Sexo;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(Request $request)
    {
        can('listar-empleado');
        $texto = trim($request->get('texto'));

        $empleados = Empleado::with('nacionalidads:id,nacionalidad')
        ->where(function ($query) use($texto){
            $query
            ->orwhere('empleado.DNI_empleado', 'LIKE', '%'.$texto.'%')
            ->orwhere('empleado.primer_nombre', 'LIKE', '%'.$texto.'%')
            ->orwhere('empleado.primer_apellido', 'LIKE', '%'.$texto.'%')
            ->orwhere('empleado.fecha_ingreso', 'LIKE', '%'.$texto.'%');
        })->orderby('id')->get();
        return view('empleados.empleado.index', compact('empleados', 'texto'));
    }
    
    public function crear()
    {
        can('crear-empleado');
        $sexos = Sexo::orderBy('id')->pluck('sexo', 'id')->toArray();
        $nacionalidads = Nacionalidad::orderBy('id')->pluck('nacionalidad', 'id')->toArray();
        return view('empleados.empleado.crear', compact('sexos', 'nacionalidads'));
    }
    
    public function guardar(ValidacionEmpleado $request)
    {
        can('guardar-empleado');
        $empleados = Empleado::create($request->all());

            $file = $request->file('foto');
            $destino = 'assets/imagenes/';
            $filename = time().'.'.$file->getClientOriginalName();
            $upload = $request->file('foto')->move($destino, $filename);
            $empleados->foto = $upload;

        $empleados->nacionalidads()->attach($request->nacionalidad_id);
        $empleados->sexos()->attach($request->sexo_id);
        return redirect('empleado/empleado')->with('mensaje', 'Empleado creado con exito');
    }

    public function editar($id)
    {
        can('editar-empleado');
        $sexos = Sexo::orderby('id')->pluck('sexo', 'id')->toArray();
        $nacionalidads = Nacionalidad::orderby('id')->pluck('nacionalidad', 'id')->toArray();
        $empleados = Empleado::with('sexos')->findOrFail($id);
        $empleados = Empleado::with('nacionalidads')->findOrFail($id);
        return view('empleados.empleado.editar', compact('empleados', 'sexos', 'nacionalidads'));
    }
    
    public function actualizar(ValidacionEmpleado $request, $id)
    {
        can('actualizar-empleado');
        $empleados = Empleado::findOrFail($id);
        $empleados->update(array_filter($request->all()));
        $empleados->sexos()->sync($request->sexo_id);
        $empleados->nacionalidads()->sync($request->nacionalidad_id);
        return redirect('empleado/empleado')->with('mensaje', 'Empleado actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        can('eliminar-empleado');
        if($request->ajax()){
            $empleados = Empleado::findOrFail($id);
            $empleados->sexos()->detach();
            $empleados->nacionalidads()->detach();
            $empleados->delete();
            return response()->json(['mensaje'=>'ok']);
        }else{
            abort(404);
        }
    }
}
