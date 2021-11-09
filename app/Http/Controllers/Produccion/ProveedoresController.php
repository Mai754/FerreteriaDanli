<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionProveedor;
use App\Models\produccion\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedoresController extends Controller
{
    public function index(Request $request)
    {
        can('listar-proveedores');

        $texto = trim($request->get('texto'));
        
        $proveedors = DB::table('proveedores')
                    ->select('id', 'DNI', 'nombre_encargado', 'apellido_encargado', 'nombre_empresa', 'dirección_empresa', 'numero_encargado', 'numero_empresa')
                    ->where(function ($query) use($texto){
                        $query
                        ->orwhere('DNI', 'LIKE', '%'.$texto.'%')
                        ->orwhere('nombre_encargado', 'LIKE', '%'.$texto.'%')
                        ->orwhere('apellido_encargado', 'LIKE', '%'.$texto.'%')
                        ->orwhere('nombre_empresa', 'LIKE', '%'.$texto.'%')
                        ->orwhere('dirección_empresa', 'LIKE', '%'.$texto.'%')
                        ->orwhere('numero_encargado', 'LIKE', '%'.$texto.'%')
                        ->orwhere('numero_empresa', 'LIKE', '%'.$texto.'%');
                    })
                    ->orderBy('id', 'asc')
                    ->paginate(10);

        return view('produccion.proveedor.index', compact('proveedors', 'texto'));
    }
    
    public function crear()
    {
        can('crear-proveedores');
        return view('produccion.proveedor.crear');
    }
    
    public function guardar(ValidacionProveedor $request)
    {
        can('guardar-proveedores');
        Proveedor::create($request->all());
        return redirect('produccion/proveedor')->with('mensaje', 'Proveedor creado con exito');
    }
    
    public function editar($id)
    {
        can('editar-proveedores');
        $proveedors = Proveedor::findOrFail($id);
        return view('produccion.proveedor.editar', compact('proveedors'));
    }
    
    public function actualizar(ValidacionProveedor $request, $id)
    {
        can('actualizar-proveedores');
        Proveedor::findOrFail($id)->update($request->all());
        return redirect('produccion/proveedor')->with('mensaje', 'Proveedor actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        can('eliminar-proveedores');
        if($request->ajax()){
            if(Proveedor::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
