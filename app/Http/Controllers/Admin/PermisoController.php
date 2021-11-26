<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarPermiso;
use App\Models\Admin\Permiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisoController extends Controller
{
    public function index(Request $request)
    {
        can('listar-permisos');

        $texto = trim($request->get('texto'));
        
        $permisos = DB::table('permiso')
                    ->select('id', 'nombre', 'slug')
                    ->where(function ($query) use($texto){
                        $query
                        ->orwhere('slug', 'LIKE', '%'.$texto.'%')
                        ->orwhere('nombre', 'LIKE', '%'.$texto.'%');
                    })
                    ->orderBy('id', 'asc')
                    ->paginate(10);

        return view('admin.permiso.index', compact('permisos', 'texto'));
    }
    
    public function crear()
    {
        can('crear-permisos');
        return view('admin.permiso.crear');
    }
    
    public function guardar(ValidarPermiso $request)
    {
        can('guardar-permisos');
        Permiso::create($request->all());
        return redirect('admin/permiso')->with('mensaje', 'Permiso creado con exito');
    }
    
    public function editar($id)
    {
        can('editar-permisos');
        $permisos = Permiso::findOrFail($id);
        return view('admin.permiso.editar', compact('permisos'));
    }
    
    public function actualizar(ValidarPermiso $request, $id)
    {
        can('actualizar-permisos');
        Permiso::findOrFail($id)->update($request->all());
        return redirect('admin/permiso')->with('mensaje', 'Permiso actualizado con exito');
    }
    
    public function eliminar(Request $request, $id)
    {
        can('eliminar-permisos');
        if($request->ajax()){
            if(Permiso::destroy($id)){
                return response()->json(['mensaje'=>'ok']);
            }else{
                return response()->json(['mensaje'=>'ng']);
            }
        }else{
            abort(404);
        }
    }
}
