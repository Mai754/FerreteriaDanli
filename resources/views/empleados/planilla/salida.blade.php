@extends("theme.$theme.layout")

@section('titulo')
    Ingreso
@endsection
@section("scripts")
    <script src="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
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
                <h3 class="card-title">Hora Salida</h3>
            </div>
            <form action="{{route('guardar_horasalida')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                                <input type="text" class="form-control" name="HoraSalida" value="{{ old('HoraSalida', $currentTime) }}" required readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-lg-11">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection