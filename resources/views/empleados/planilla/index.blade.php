@extends("theme.$theme.layout")

@section('titulo')
    Ingreso
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/planilla/crear.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Hora Entrada</h3>
            </div>
            <div class="card-body">
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                <div class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Datos Empleado</h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="dia_libres">Empleados</label>
                            <select name="empleado" id="empleado" onclick="datos()">
                                @foreach ($empleados as $empleado)
                                    <option  value="{{$empleado->id}}">{{$empleado->primer_nombre." ".$empleado->primer_apellido}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="dia_libres">Dias libres</label>
                            <input type="text" name="libres" id="libres">
                        </div>
                        <div class="col-sm-3">
                            <label for="dia_libres">Dias Faltantes</label>
                            <input type="text" name="faltantes" id="faltantes">
                        </div>
                        <div class="col-sm-3">
                            <label for="dia_libres">Horas Trabajadas</label>
                            <input type="text" name="trabajadas" id="trabajadas">
                        </div>
                        <div class="col-sm-3">
                            <label for="dia_libres">Domingos Trabajados</label>
                            <input type="text" name="domingos" id="domingos">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function datos(){

            var datos_empleado = '<?php echo json_encode($asistencia); ?>';

            var datosJson = JSON.parse(datos_empleado);

            var id_empleado = document.getElementById("empleado").value;

            var domingos = 0;
            var sabados = 0;
            var horas = 0;
            var dias_fa = 0;

        for (var i = 0; i < datosJson.length; i++) {

            if (new Date(datosJson[i].fecha_hora_entrada).getDay() == 0 && datosJson[i].id_empleado == id_empleado) {
                domingos++;
            }

            if (new Date(datosJson[i].fecha_hora_entrada).getDay() == 9 && datosJson[i].id_empleado == id_empleado) {
                sabados++;
            }

            var fecha1 = moment(datosJson[i].fecha_hora_entrada, "YYYY-MM-DD HH:mm:ss");
            var fecha2 = moment(datosJson[i].fecha_hora_salida, "YYYY-MM-DD HH:mm:ss");

            var diff = fecha2.diff(fecha1, 'h');
            horas += diff;
        }

        var diasMes = new Date(new Date().getFullYear(), new Date().getMonth(), 0).getDate();

        console.log(diasMes);

            document.getElementById("domingos").value= domingos;
            document.getElementById("trabajadas").value= horas;
            document.getElementById("faltantes").value=dias_fa;
            document.getElementById("libres").value=dias_fa;
        }
    </script>
@endsection
