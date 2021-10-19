<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMenu;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class MenuController extends Controller
{
    public function index()
    {
        can('listar-menus');
        $menus = Menu::getMenu();
        return view('admin.menu.index', compact('menus'));
    }
    
    public function crear()
    {
        can('crear-menus');
        return view('admin.menu.crear');
    }
    
    public function guardar(ValidacionMenu $request)
    {
        can('guardar-menus');
        Menu::create($request->all());
        return redirect('admin/menu/crear')->with('mensaje', 'Menu creado con exito');
    }
    
    public function editar($id)
    {
        can('editar-menus');
        $data = Menu::findOrFail($id);
        return view('admin.menu.editar', compact('data'));
    }
    
    public function actualizar(ValidacionMenu $request, $id)
    {
        can('actualizar-menus');
        Menu::findOrFail($id)->update($request->all());
        return redirect('admin/menu')->with('mensaje', 'Menu actualizado con exito');
    }
    
    public function eliminar($id)
    {
        can('eliminar-menus');
        Menu::destroy($id);
        return redirect('admin/menu')->with('mensaje', 'Menu eliminado con exito'); 
    }

    public function guardarOrden(Request $request){
        can('ordenar-menus');
        if($request->ajax()){
            $menu = new Menu;
            $menu->guardarOrden($request->menu);
            return response()->json(['respuesta'=> 'ok']);
        }else {
            abort(404);
        }
    }
}
