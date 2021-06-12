<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Models\Empleado\DatosAdcionalesEmpleado;
use App\Http\Requests\ValidacionHora;
use App\Models\Empleado\Hora;
  use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.planilla.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionHora $request)
    {
        Hora::create($request->all());
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

    // public function vista(){
    //     return view('vista_prueba');
    // }

    public function asignar_dias_libre(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdcionalesEmpleado();

            $datos_adcionales->dias_libres = $request->dias_libres;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdcionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->dias_libres = $request->dias_libres;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Dias Libres Asignadas Exitosamente';

    }



    public function asignar_dias_faltantes(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdcionalesEmpleado();

            $datos_adcionales->dias_faltantes = $request->dias_faltantes;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdcionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->dias_faltantes = $request->dias_faltantes;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Dias Faltantes Asignadas Exitosamente';
    }


    public function asignar_horas_tabajada(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdcionalesEmpleado();

            $datos_adcionales->horas_tabajadas = $request->horas_tabajadas;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdcionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->horas_tabajadas = $request->horas_tabajadas;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Horas Trabajadas Asignadas Exitosamente';

    }


    public function asignar_domingos_trabajado(Request $request){

        $datos_adcionales = DB::select('select * from datos_empleados where id_empleado = ?', [$request->id_empleado]);

        if(count($datos_adcionales)==0){
            $datos_adcionales = new DatosAdcionalesEmpleado();

            $datos_adcionales->domingos_trabajados = $request->domingos_trabajados;
            $datos_adcionales->id_empleado = $request->id_empleado;
            $datos_adcionales->save();
        }else{
            $datos_adcionales = DatosAdcionalesEmpleado::where('id_empleado',$request->id_empleado)->firstOrFail();

            $datos_adcionales->domingos_trabajados = $request->domingos_trabajados;
            $datos_adcionales->save();
        }
        //aqui se redirecciona a la vista actual
        return 'Domingos Trbajados Asignadas Exitosamente';
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
