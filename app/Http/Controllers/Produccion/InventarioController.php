<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionInventario;
use App\Models\produccion\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        can('listar-productos');
        $texto = trim($request->get('texto'));
        
        $productos = DB::table('inventarios')
                    ->select('id', 'codigo_producto', 'nombre_producto', 'marca', 'cantidad', 'precio_compra', 'precio_venta')
                    ->where(function ($query) use($texto){
                        $query
                        ->orwhere('codigo_producto', 'LIKE', '%'.$texto.'%')
                        ->orwhere('nombre_producto', 'LIKE', '%'.$texto.'%')
                        ->orwhere('marca', 'LIKE', '%'.$texto.'%');
                    })
                    ->orderBy('id', 'asc')
                    ->paginate(10);
                    
        return view('produccion.inventarios.index', compact('productos', 'texto'));
    }

    public function crear()
    {
        can('crear-producto');
        return view('produccion.inventarios.crear');
    }

    public function guardar(ValidacionInventario $request)
    {
        Inventario::create($request->all());
        return redirect('produccion/inventario')->with('mensaje', 'Producto creado con exito');
    }

    public function editar($id)
    {
        can('editar-producto');
        $productos = Inventario::findOrFail($id);
        return view('produccion.inventarios.editar', compact('productos'));
    }

    public function actualizar(ValidacionInventario $request, $id)
    {
        Inventario::findOrFail($id)->update($request->all());
        return redirect('produccion/inventario')->with('mensaje', 'Producto actualizado con exito');
    }
}
