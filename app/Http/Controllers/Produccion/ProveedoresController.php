<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionProveedor;
use App\Models\produccion\Proveedor;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        can('listar-proveedores');
        $proveedors = Proveedor::orderby('id')->get();
        return view('produccion.proveedor.index', compact('proveedors'));
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
