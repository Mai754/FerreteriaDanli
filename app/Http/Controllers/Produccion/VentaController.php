<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Models\produccion\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        can('hacer-venta');
        $texto = trim($request->get('texto'));

        $ventasTotales = Venta::join("productos_vendidos", "productos_vendidos.id_venta", "=", "ventas.id")
            ->join('clientes','ventas.id_cliente','=','clientes.id')
            ->select('clientes.*',"ventas.*", DB::raw("sum(productos_vendidos.cantidad * productos_vendidos.precio) as total"))
            ->where(function ($query) use($texto){
                $query
                ->orwhere('ventas.created_at', 'LIKE', '%'.$texto.'%')
                ->orwhere('clientes.nombre', 'LIKE', '%'.$texto.'%');
            })
            ->groupBy("ventas.id", "ventas.created_at", "ventas.updated_at")
            ->groupBy("ventas.id", "ventas.created_at", "ventas.updated_at", "ventas.id_cliente")
            ->groupBy("clientes.id",'clientes.identidad', "clientes.nombre", 'clientes.apellido', 
                'clientes.telefono', 'clientes.direccion', "clientes.created_at", "clientes.updated_at")
            ->get();

        return view("produccion.venta.index", ["ventas" => $ventasTotales,], compact('texto'));
    }

    public function crear()
    {
        $clientes = DB::table('clientes')->get();
        $ventas = DB::table('ventas')->get();
        $inventarios = DB::table('inventarios')->orderBy('nombre_producto')->get();

        return view('produccion.venta.crear', [
            'clientes'=>$clientes,
            'ventas'=>$ventas,
            'inventarios'=>$inventarios
        ]);
    }
    
    public function ver()
    {
        /**$verventas = DB::table('productos_vendidos')
            ->join('ventas','productos_vendidos.id_venta', '=', 'ventas.id')
            ->join('clientes','ventas.id_cliente', '=', 'clientes.id')
            ->select('ventas.id', 'clientes.nombre','productos_vendidos.nombre_producto', 'productos_vendidos.codigo_producto', 
                    'productos_vendidos.cantidad','productos_vendidos.precio',
                    'ventas.created_at', DB::raw('sum(productos_vendidos.cantidad * productos_vendidos.precio) as total'))
            ->where('id', $id);
        

        return view('produccion.venta.ver', compact('verventas'));

        $venta = null;
        $total = 0;

        foreach($venta->inventarios as $inventario){
            $total += $inventario -> cantidad * $inventario->precio;
        }
        
        return view("produccion.venta.ver", [
            "venta" => $venta,
            "total" => $total,
        ]);*/
    }
}
