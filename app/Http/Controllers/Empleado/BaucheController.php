<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionBauche;
use App\Models\Empleado\Bauche;
use Illuminate\Http\Request;

class BaucheController extends Controller
{
    public function index()
    {
        $buaches = Bauche::orderby('id')->get();
        return view('empleados.bauche.index', compact('buaches'));
    }
    public function crear()
    {
        
    }
    public function guardar(ValidacionBauche $request)
    {
        
    }
    public function ver($id)
    {
        
    }
    public function editar($id)
    {
        
    }
    public function actualizar(ValidacionBauche $request, $id)
    {
        
    }
    public function eliminar($id)
    {
        
    }
}
