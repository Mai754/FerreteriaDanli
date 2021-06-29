<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionSueldo;
use App\Models\Empleado\Sueldo;
use Illuminate\Http\Request;

class SueldoController extends Controller
{
    public function index()
    {
        $sueldos = Sueldo::orderby('id')->get();
        return view('empleados.sueldo.index', compact('sueldos'));
    }

    public function crear()
    {
        return view('empleados.sueldo.crear');
    }

    public function guardar(ValidacionSueldo $request)
    {
        Sueldo::create($request->all());
        return redirect('empleado/sueldo')->with('mensaje', 'Sueldo creado con exito');
    }

    public function ver($id)
    {
        //
    }

    public function editar($id)
    {
        $sueldos = Sueldo::findOrFail($id);
        return view('empleados.sueldo.editar', compact('sueldos'));
    }

    public function actualizar(ValidacionSueldo $request, $id)
    {
        Sueldo::findOrFail($id)->update($request->all());
        return redirect('empleado/sueldo')->with('mensaje', 'Sueldo actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            if(Sueldo::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
