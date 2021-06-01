<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionProyecto;
use App\Models\Empleado\Empleado;
use App\Models\Empleado\Estado;
use App\Models\Empleado\Proyecto;
use App\Models\produccion\Cliente;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::with('empleados:id,primer_nombre')->orderby('id')->get();
        $proyectos = Proyecto::with('estados:id,nombre')->orderby('id')->get();
        return view('empleados.proyecto.index', compact('proyectos'));
    }

    public function crear()
    {
        $estados = Estado::orderBy('id')->pluck('nombre', 'id')->toArray();
        $clientes = Cliente::orderBy('id')->pluck('nombre_cliente', 'id')->toArray();
        $empleados = Empleado::orderBy('id')->pluck('primer_nombre', 'id')->toArray();
        return view('empleados.proyecto.crear', compact('empleados', 'clientes', 'estados'));
    }

    public function guardar(ValidacionProyecto $request)
    {
        $proyectos = Proyecto::create($request->all());
        $proyectos->empleados()->attach($request->empleado_id);
        $proyectos->clientes()->attach($request->cliente_id);
        $proyectos->estados()->attach($request->estado_id);
        return redirect('empleado/proyecto')->with('mensaje','Proyecto creado con exito');
    }

    public function ver($id)
    {
        $clientes = Cliente::orderby('id')->pluck('nombre_cliente','id')->toArray();
        $empleados = Empleado::orderby('id')->pluck('primer_nombre','id')->toArray();
        $proyectos = Proyecto::with('clientes')->findOrFail($id);
        $proyectos = Proyecto::with('empleados')->findOrFail($id);
        return view('empleados.proyecto.ver', compact('proyectos', 'clientes', 'empleados'));
    }

    public function editar($id)
    {
        $estados = Estado::orderby('id')->pluck('nombre', 'id')->toArray();
        $clientes = Cliente::orderby('id')->pluck('nombre_cliente','id')->toArray();
        $empleados = Empleado::orderby('id')->pluck('primer_nombre','id')->toArray();
        $proyectos = Proyecto::with('estados')->findOrFail($id);
        $proyectos = Proyecto::with('clientes')->findOrFail($id);
        $proyectos = Proyecto::with('empleados')->findOrFail($id);
        return view('empleados.proyecto.editar', compact('proyectos', 'estados', 'clientes', 'empleados'));
    }

    public function actualizar(ValidacionProyecto $request, $id)
    {
        $proyectos = Proyecto::findOrFail($id);
        $proyectos->update(array_filter($request->all()));
        $proyectos->estados()->sync($request->estado_id);
        $proyectos->clientes()->sync($request->cliente_id);
        $proyectos->empleados()->sync($request->empleado_id);
        return redirect('empleado/proyecto')->with('mensaje', 'Proyecto actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){
            $proyectos = Proyecto::findOrFail($id);
            $proyectos->empleados()->detach();
            $proyectos->clientes()->detach();
            $proyectos->estados()->detach();
            $proyectos->delete();
            return response()->json(['mensaje' => 'ok']);
        }else{
            abort(404);
        }
    }
}
