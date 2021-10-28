<?php

namespace App\Http\Controllers;

use App\Models\Evento\Evento;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return redirect('seguridad/login');
    }

    public function inicio(){
        return view('inicio');
    }

    public function show(Evento $evento)
    {
        $evento = Evento::all();
        return response()->json($evento);
    }

}