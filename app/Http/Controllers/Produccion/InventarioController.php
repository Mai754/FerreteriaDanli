<?php

namespace App\Http\Controllers\Produccion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionInventario;
use App\Models\produccion\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InventarioController extends Controller
{
    public function index()
    {
        can('listar-productos');
        $productos = Inventario::orderby('id')->get();
        return view('produccion.inventarios.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
        can('crear-producto');
        return view('produccion.inventarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionInventario $request)
    {
        //
        Inventario::create($request->all());
        return redirect('produccion/inventario')->with('mensaje', 'Producto creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
        can('editar-producto');
        $producto = Inventario::findOrFail($id);
        return view('produccion.inventarios.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionInventario $request, $id)
    {
        //
        Inventario::findOrFail($id)->update($request->all());
        return redirect('produccion/inventario')->with('mensaje', 'Producto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, $id)
    {
        //
        if($request->ajax()){
            if(Inventario::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
