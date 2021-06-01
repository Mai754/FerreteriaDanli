@extends("theme.$theme.layout")

@section('titulo')
    Proyectos
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Proyectos</font>
                    </font>
                </h3>
                <div class="card-tools">
                    <a href="{{route('crear_proyecto')}}" class="btn btn-tool" title="Agregar">
                        <i class="fa fa-plus"></i> Nuevo
                    </a>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Minimizar">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Eliminar">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects" id="tabla-data">
                    <thead>
                        <tr>
                            <th class="width20">#</th>
                            <th>Nombre del proyecto</th>
                            <th class="text-center">Miembros del equipo</th>
                            <th>Progreso del proyecto</th>
                            <th class="text-center">Estado</th>
                            <th class="width80"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proyectos as $proyecto)
                            <tr>
                                <td>{{$proyecto->id}}</td>
                                <td>
                                    <a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{$proyecto->nombre_del_proyecto}}
                                            </font>
                                        </font>
                                    </a>
                                    <br>
                                    <small>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{$proyecto->created_at}}
                                            </font>
                                        </font>
                                    </small>
                                </td>
                                <td class="text-center">
                                    @foreach ($proyecto->empleados as $empleado)
                                        {{$loop->last ? $empleado->primer_nombre : $empleado->primer_nombre. ','}}
                                    @endforeach
                                </td>
                                <td class="project_progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                        </div>
                                    </div>
                                    <small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        57% completo
                                    </font></font></small>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                @foreach ($proyecto->estados as $estado)
                                                    {{$loop->last ? $estado->nombre : $estado->nombre. ','}}
                                                @endforeach
                                            </font>
                                        </font>
                                    </span>
                                </td>
                                <td>
                                    <a href="{{route('ver_proyecto', ['id' => $proyecto->id])}}" class="btn-accion-tabla tooltipsC" title="Ver este registro">
                                        <i class="fas fa-folder"></i>
                                    </a>
                                    <a href="{{route('editar_proyecto', ['id' => $proyecto->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('eliminar_proyecto', ['id' => $proyecto->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                            <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection