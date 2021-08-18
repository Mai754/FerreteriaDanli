<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Models\produccion\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $comprasTotales = Compra::join("productos_comprados", "productos_comprados.id_compra", "=", "compras.id")
            ->join('proveedores','compras.id_proveedor','=','proveedores.id')
            ->select('proveedores.*',"compras.*", DB::raw("sum(productos_comprados.cantidad * productos_comprados.precio) as total"))
            ->where(function ($query) use($texto){
                $query
                ->orwhere('compras.created_at', 'LIKE', '%'.$texto.'%')
                ->orwhere('proveedores.nombre_encargado', 'LIKE', '%'.$texto.'%');
            })
            ->groupBy("compras.id", "compras.created_at", "compras.updated_at")
            ->groupBy("compras.id", "compras.created_at", "compras.updated_at", "compras.id_proveedor", "compras.id_empleado")
            ->groupBy("proveedores.id",'proveedores.DNI', "proveedores.nombre_encargado", 'proveedores.apellido_encargado', 
                'proveedores.nombre_empresa', 'proveedores.dirección_empresa', 'proveedores.numero_encargado', "proveedores.numero_empresa", "proveedores.created_at", "proveedores.updated_at")
            ->get();

        return view("produccion.compra.index", ["compras" => $comprasTotales,], compact('texto'));
    }
    
    public function crear()
    {
        $proveedors = DB::table('proveedores')->get();
        $compras = DB::table('compras')->get();
        $inventarios = DB::table('inventarios')->get();

        return view('produccion.compra.crear', [
            'proveedors'=>$proveedors,
            'compras'=>$compras,
            'inventarios'=>$inventarios
        ]);
    }
    
    public function ver()
    {
        /*$compra = null;
        $total = 0;

        foreach($compra->inventarios as $inventario){
            $total += $inventario -> cantidad * $inventario->precio;
        }
        
        return view("produccion.compra.ver", [
            "venta" => $compra,
            "total" => $total,
        ]);*/
    }
}
