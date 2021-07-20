<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionHora;
use App\Http\Requests\ValidacionHoraEntrada;
use App\Http\Requests\ValidacionHoraSalida;
use App\Models\Empleado\DatosAdicionalesEmpleado;
use App\Models\Empleado\Hora;
use App\Models\Empleado\HoraEntrada;
use App\Models\Empleado\HoraSalida;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $now = Carbon::now();
        $currentTime = $now->format('h:i');
        return view('empleados.planilla.entrada', compact('currentTime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionHoraEntrada $request)
    {
        HoraEntrada::create($request->all());
        return redirect('/')->with('mensaje','Hora de Entrada Ingresada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver($id)
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }

    public function asignar_dias_libre(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdicionalesEmpleado();

            $datos_adcionales->dias_libres = $request->dias_libres;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdicionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->dias_libres = $request->dias_libres;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Dias Libres Asignadas Exitosamente';

    }

    public function asignar_dias_faltantes(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdicionalesEmpleado();

            $datos_adcionales->dias_faltantes = $request->dias_faltantes;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdicionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->dias_faltantes = $request->dias_faltantes;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Dias Faltantes Asignadas Exitosamente';
    }

    public function asignar_horas_tabajada(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdicionalesEmpleado();

            $datos_adcionales->horas_tabajadas = $request->horas_tabajadas;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdicionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->horas_tabajadas = $request->horas_tabajadas;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Horas Trabajadas Asignadas Exitosamente';

    }

    public function asignar_domingos_trabajado(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdicionalesEmpleado();

            $datos_adcionales->domingos_trabajados = $request->domingos_trabajados;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdicionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->domingos_trabajados = $request->domingos_trabajados;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Domingos Trbajados Asignadas Exitosamente';
    }

    public function asignar_feriados_trabajado(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdicionalesEmpleado();

            $datos_adcionales->domingos_trabajados = $request->domingos_trabajados;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdicionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->domingos_trabajados = $request->domingos_trabajados;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Feriados Trbajados Asignadas Exitosamente';
    }

    public function resetear_datos_empleados($id){
        DB::update('update datos_empleados set dias_libres = 0,
                                                dias_faltantes = 0,
                                                horas_tabajadas = 0,
                                                domingos_trabajados = 0,
                    where id_empleado = ?',[$id]);
        //aqui se redirecciona a la vista actual
        return 'Datos Limpiados Exitosamente';
    }
}
