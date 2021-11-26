@extends("theme.$theme.layout")

@section('titulo')
    Permisos
@endsection
@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Instrucciones:</h5>
            * El apartado de edición de permisos es destinado para desarrollo, el nombre de permiso es lo que se mostrara para asignar un permiso en PERMISO-ROL.
            <br>
            * Enlance; contiene las instrucción que el codigo fuente necesita para que funcione correctamente los permisos. Este campo es autogenerado.
        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Editar Permisos</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('permiso')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_permiso', ['id' => $permisos->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                @method("put")
                <div class="card-body">
                    @include('admin.permiso.form')
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