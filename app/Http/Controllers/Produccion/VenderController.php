<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Models\produccion\Cliente;
use App\Models\produccion\Inventario;
use App\Models\produccion\ProductoVendido;
use App\Models\produccion\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenderController extends Controller
{
    public function index()
    {
        can('hacer-venta');
        $total = 0;
        foreach ($this->obtenerProductos() as $inventario) {
            $total += $inventario->cantidad * $inventario->precio_venta;
        }
        return view('produccion.venta.crear',
        [
            "total" => $total,
            "clientes" => Cliente::all(),
        ]);
    }

    public function terminarOCancelarVenta(Request $request)
    {
        if ($request->input("accion") == "terminar") {
            return $this->terminarVenta($request);
        } else {
            return $this->cancelarVenta();
        }
    }

    public function terminarVenta(Request $request)
    {
        $venta = new Venta();
        $venta->id_cliente = $request->input('id_cliente');
        $venta->saveOrFail();
        $idVenta = $venta->id;
        $inventarios = $this->obtenerProductos();

        foreach ($inventarios as $inventario) {
            $productoVendido = new ProductoVendido();
            $productoVendido->fill([
                "id_venta" => $idVenta,
                "codigo_producto" => $inventario->codigo_producto,
                "nombre_producto" => $inventario->nombre_producto,
                "precio" => $inventario->precio_venta,
                "cantidad" => $inventario->cantidad,
            ]);
            $productoVendido->saveOrFail();

            $productoActualizado = Inventario::find($inventario->id);
            $productoActualizado-> cantidad -= $productoVendido->cantidad;
            $productoActualizado->saveOrFail();
        }

        $this->vaciarProductos();
        return redirect()
            ->route("ventas")
            ->with("mensaje", "Venta Facturada");
    }

    private function obtenerProductos()
    {
        $inventarios = session("inventarios");
        if (!$inventarios) {
            $inventarios = [];
        }
        return $inventarios;
    }

    public function cancelarVenta()
    {
        $this->vaciarProductos();
        return redirect()
            ->route("inicio")
            ->with("mensaje", "Venta cancelada");
    }

    private function vaciarProductos()
    {
        $this->guardarProductos(null);
    }

    public function quitarProductoDeVenta(Request $request)
    {
        $indice = $request->post("indice");
        $inventarios = $this->obtenerProductos();
        array_splice($inventarios, $indice, 1);
        $this->guardarProductos($inventarios);
        return redirect()
            ->route("crear_venta");
    }

    private function guardarProductos($inventarios)
    {
        session([
            "inventarios" => $inventarios,
        ]);
    }

    public function agregarProductoVenta(Request $request)
    {
        $codigo_producto = $request->post("codigo_producto");
        $can = $request->post("cantidad");
        $inventario = Inventario::where("codigo_producto", "=", $codigo_producto)->first();
        if($can>0){
            if (!$inventario) {
                return redirect()
                    ->route("crear_venta")
                    ->with("mensaje", "Producto no encontrado");
            }
            $this->agregarProductoACarrito($inventario, $can);
            return redirect()
                ->route("crear_venta");
        }else{
            return redirect()
                    ->route("crear_venta")
                    ->with("mensaje", "La cantidad debe de ser positiva");
        }
        
    }

    private function agregarProductoACarrito($inventario, $can)
    {
        if ($inventario->cantidad <= 0) {
            return redirect()->route("crear_venta")
                ->with([
                    "mensaje" => "No hay existencias del producto",
                    "tipo" => "warning"
                ]);
        }
        $inventarios = $this->obtenerProductos();
        $posibleIndice = $this->buscarIndiceDeProducto($inventario->codigo_producto, $inventarios);
        if ($posibleIndice === -1) {
            $inventario->cantidad = $can;
            array_push($inventarios, $inventario);
        } else {
            if ($inventarios[$posibleIndice]->cantidad + $can > $inventario->cantidad) {
                return redirect()->route("crear_venta")
                    ->with([
                        "mensaje" => "No se pueden agregar más productos de este tipo, se quedarían sin existencia",
                        "tipo" => "warning"
                    ]);
            }
            $inventarios[$posibleIndice]->cantidad+=$can;
        }
        $this->guardarProductos($inventarios);
    }

    private function buscarIndiceDeProducto(string $codigo_producto, array &$inventarios)
    {
        foreach ($inventarios as $indice => $inventario) {
            if ($inventario->codigo_producto === $codigo_producto) {
                return $indice;
            }
        }
        return -1;
    }

}
