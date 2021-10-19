<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Models\produccion\Compra;
use App\Models\produccion\Inventario;
use App\Models\produccion\ProductoComprado;
use App\Models\produccion\Proveedor;
use Illuminate\Http\Request;

class ComprarController extends Controller
{
    public function index()
    {
        can('hacer-compra');
        $total = 0;
        foreach ($this->obtenerProductos() as $inventario) {
            $total += $inventario->cantidad * $inventario->precio_compra;
        }
        return view('produccion.compra.crear',
        [
            "total" => $total,
            "proveedors" => Proveedor::all(),
        ]);
    }

    public function terminarOCancelarCompra(Request $request)
    {
        if ($request->input("accion") == "terminar") {
            return $this->terminarCompra($request);
        } else {
            return $this->cancelarCompra();
        }
    }

    public function terminarCompra(Request $request)
    {
        $compra = new Compra();
        $compra->id_proveedor = $request->input('id_proveedor');
        //$compra->id_empleado = $request->input('id_empleado');
        $compra->saveOrFail();
        $idCompra = $compra->id;
        $inventarios = $this->obtenerProductos();

        foreach ($inventarios as $inventario) {

            $productoComprado = new ProductoComprado();
            $productoComprado->fill([
                "id_compra" => $idCompra,
                "codigo_producto" => $inventario->codigo_producto,
                "nombre_producto" => $inventario->nombre_producto,
                "precio" => $inventario->precio_compra,
                "cantidad" => $inventario->cantidad,
            ]);
            $productoComprado->saveOrFail();


            $productoEnInventario = new Inventario();
            $codigo = Inventario::where("codigo_producto", "=", $inventario->codigo_producto)->first();
            $precioCompra = Inventario::where("precio_compra", "=", $inventario->precio_compra)->first();
            $precioVenta = Inventario::where("precio_venta", "=", $inventario->precio_venta)->first();

            if(!$codigo){
                $productoEnInventario->fill([
                    "codigo_producto" => $inventario->codigo_producto,
                    "nombre_producto" => $inventario->nombre_producto,
                    "precio_compra" => $inventario->precio_compra,
                    "precio_venta" => $inventario->precio_venta,
                    "cantidad" => $inventario->cantidad,
                    "marca" => $inventario->marca,
                ]);
                $productoEnInventario->saveOrFail();
            }else{
                if(!$precioCompra or !$precioVenta){
                    $productoEnInventario->fill([
                        "codigo_producto" => $inventario->codigo_producto,
                        "nombre_producto" => $inventario->nombre_producto,
                        "precio_compra" => $inventario->precio_compra,
                        "precio_venta" => $inventario->precio_venta,
                        "cantidad" => $inventario->cantidad,
                        "marca" => $inventario->marca,
                    ]);
                    $productoEnInventario->saveOrFail();
                }else{
                    $productoActualizado = Inventario::find($inventario->id);
                    $productoActualizado-> cantidad += $productoComprado->cantidad;
                    $productoActualizado-> saveOrFail();
                }
            }
        }

        $this->vaciarProductos();
        return redirect()
            ->route("compras")
            ->with("mensaje", "Compra Facturada");
    }

    private function obtenerProductos()
    {
        $inventarios = session("inventarios");
        if (!$inventarios) {
            $inventarios = [];
        }
        return $inventarios;
    }

    public function cancelarCompra()
    {
        $this->vaciarProductos();
        return redirect()
            ->route("crear_compra")
            ->with("mensaje", "Compra Cancelada");
    }

    private function vaciarProductos()
    {
        $this->guardarProductos(null); 
    }

    public function quitarProductoDeCompra(Request $request)
    {
        $indice = $request->post("indice");
        $inventarios = $this->obtenerProductos();
        array_splice($inventarios, $indice, 1);
        $this->guardarProductos($inventarios);
        return redirect()
            ->route("crear_compra");
    }

    private function guardarProductos($inventarios)
    {
        session([
            "inventarios" => $inventarios,
        ]);
    }

    public function agregarProductoCompra(Request $request)
    {
        $codigo_producto = $request->post("codigo_producto");
        $can = $request->post("cantidad");
        $precioC = $request->post("precio_compra");
        $precioV = $request->post("precio_venta");

        $inventario = Inventario::where("codigo_producto", "=", $codigo_producto)->first();
        
        if($can>0){
            $this->agregarProductoACarrito($inventario, $can, $precioC, $precioV);
            return redirect()->route("crear_compra");
        }else{
            return redirect()
                    ->route("crear_compra")
                    ->with("mensaje", "La cantidad debe de ser positiva");
        }
    }

    private function agregarProductoACarrito($inventario, $can, $precioC, $precioV)
    {
        $inventarios = $this->obtenerProductos();

        $posibleIndice = $this->buscarIndiceDeProducto($inventario->codigo_producto, $inventarios);

        if ($posibleIndice === -1) {
            $inventario->cantidad = $can;
            $inventario->precio_compra = $precioC;
            $inventario->precio_venta = $precioV;
            array_push($inventarios, $inventario);
        } else {
            $inventarios [$posibleIndice]-> cantidad += $can;
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
