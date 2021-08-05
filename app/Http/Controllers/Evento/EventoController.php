<?php

namespace App\Http\Controllers\Evento;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionEvento;
use App\Models\Evento\Evento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::orderby('id')->get();
        return view('eventos.index', compact('eventos'));
    }

    public function crear()
    {
        //
    }

    public function store(Request $request)
    {
        request()->validate(Evento::$rules);
        $evento = Evento::create($request->all());
    }

    public function show(Evento $evento)
    {
        $evento = Evento::all();
        return response()->json($evento);
        
    }

    public function edit($id)
    {
        $evento = Evento::find($id);
        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');
        return response()->json($evento);
    }

    public function update(Request $request, Evento $evento)
    {
        request()->validate(Evento::$rules);
        $evento->update($request->all());
        return response()->json($evento);
    }

    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();
        return response()->json($evento);
    }
}
