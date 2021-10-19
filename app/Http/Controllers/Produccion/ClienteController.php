<?php

namespace App\Http\Controllers\produccion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionCliente;
use App\Models\produccion\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        can('listar-cliente');
        $texto = trim($request->get('texto'));
        
        $clientes = DB::table('clientes')
                    ->select('id', 'identidad', 'nombre', 'apellido', 'telefono', 'direccion')
                    ->where(function ($query) use($texto){
                        $query
                        ->orwhere('identidad', 'LIKE', '%'.$texto.'%')
                        ->orwhere('nombre', 'LIKE', '%'.$texto.'%')
                        ->orwhere('apellido', 'LIKE', '%'.$texto.'%');
                    })
                    ->orderBy('id', 'asc')
                    ->paginate(10);

        return view('produccion.clientes.index', compact('clientes', 'texto'));
    }

    public function crear()
    {
        can('crear-cliente');
        return view('produccion.clientes.crear');
    }

    public function guardar(ValidacionCliente $request)
    {
        can('guardar-cliente');
        Cliente::create($request->all());
        return redirect('produccion/cliente')->with('mensaje', 'Cliente creado con exito');
    }

    public function editar($id)
    {
        can('editar-cliente');
        $clientes = Cliente::findOrFail($id);
        return view('produccion.clientes.editar', compact('clientes'));
    }
    
    public function actualizar(ValidacionCliente $request, $id)
    {
        can('actualizar-cliente');
        Cliente::findOrFail($id)->update($request->all());
        return redirect('produccion/cliente')->with('mensaje', 'Cliente actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        can('eliminar-cliente');
        if($request->ajax()){
            if(Cliente::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
