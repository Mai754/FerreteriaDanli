<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionCompra;
use App\Models\Empleado\Empleado;
use App\Models\produccion\Compras;
use App\Models\produccion\Inventario;
use App\Models\produccion\Proveedor;
use App\Models\produccion\TotalCompra;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
        $compras = Compras::orderBy('id')->get();
        $empleadocompras = Compras::with('empleados:id,DNI_empleado,primer_nombre,primer_apellido');
        $proveedorcompras = Compras::with('proveedores:id,DNI,nombre_encargado,nombre_empresa,direccion_empresa');
        return view('produccion.compra.index', compact('empleadocompras','proveedorcompras', 'compras'));
    }

    public function crear()
    {
        $proveedors = Proveedor::orderby('id')->pluck('nombre_encargado', 'id')->toArray();
        $empleados = Empleado::orderby('id')->pluck('primer_nombre', 'id')->toArray();
        return view('produccion.compra.crear', compact('proveedors', 'empleados'));
    }

    public function guardar(ValidacionCompra $request)
    {
        $factura = Compras::create($request->all());
        $factura->proveedores()->sync($request->proveedor_id);
        $factura->empleados()->sync($request->empleado_id);
    }

    public function ver($id)
    {

    }

    public function editar($id)
    {

    }

    public function actualizar(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
