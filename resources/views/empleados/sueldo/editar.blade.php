@extends("theme.$theme.layout")

@section('titulo')
    Sueldos
@endsection
@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Editar Sueldo</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('sueldo')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_sueldo', ['id' => $sueldos->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                @method("put")
                <div class="card-body">
                    @include('empleados.sueldo.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-editar')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection