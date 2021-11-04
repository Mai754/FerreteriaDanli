<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Rol;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        can('listar-usuarios');
        $texto = trim($request->get('texto'));

        $usuarios = Usuario::with('roles:id,nombre')
        ->where(function ($query) use($texto){
            $query
            ->orwhere('usuario.usuario', 'LIKE', '%'.$texto.'%')
            ->orwhere('usuario.nombre', 'LIKE', '%'.$texto.'%')
            ->orwhere('usuario.email', 'LIKE', '%'.$texto.'%');
        })->orderby('id')->get();

        return view('admin.usuario.index', compact('usuarios', 'texto'));
    }

    public function crear()
    {
        can('crear-usuarios');
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('admin.usuario.crear', compact('rols'));
    }

    public function guardar(ValidacionUsuario $request)
    {
        can('guardar-usuarios');
        $usuario = Usuario::create($request->all());
        $usuario->roles()->sync($request->rol_id);
        return redirect('admin/usuario')->with('mensaje','usuario creado con exito');
    }

    public function editar($id)
    {
        can('editar-usuarios');
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $usuarios = Usuario::with('roles')->findOrFail($id);
        return view('admin.usuario.editar', compact('usuarios', 'rols'));
    }

    public function actualizar(ValidacionUsuario $request, $id)
    {
        can('actualizar-usuarios');
        $usuario = Usuario::findOrFail($id);
        $usuario->update(array_filter($request->all()));
        $usuario->roles()->sync($request->rol_id);
        return redirect('admin/usuario')->with('mensaje', 'Usuario actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        can('eliminar-usuarios');
        if($request->ajax()){
            $usuario = Usuario::findOrFail($id);
            $usuario->roles()->detach();
            $usuario->delete();
            return response()->json(['mensaje' => 'ok']);
        }else{
            abort(404);
        }
    }
}
