@extends("theme.$theme.layout")

@section('titulo')
    Proyectos
@endsection
@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="content-header">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Editar Proyecto | {{$proyectos->nombre_del_proyecto}} | {{$proyectos->created_at}}</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <a href="{{route('proyecto')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver
                    </a>
                  </ol>
                </div>
              </div>
        </section>

        @include('includes.form-error')
        @include('includes.mensaje')
        <form action="{{route('actualizar_proyecto', ['id' => $proyectos->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
            @csrf
            @method("put")
            <div class="row">
                @include('empleados.proyecto.form')
            </div>
            <div class="row">
                <div class="col-12">
                    @include('includes.boton-form-editar')
                </div>
            </div>
        </form>
    </div>
@endsection