@extends("theme.$theme.layout")

@section('titulo')
    Permisos
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
                <h3 class="card-title">Permisos</h3>    
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_permiso')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>
                <br>
                <form class="{{route('permiso')}}" method="get">
                    <div class="input-group input-group-sm">
                        <a href="{{route('permiso')}}" class="btn btn-info btn-sm">X</a>
                        <input class="form-control" name="texto" autocomplete="off" value="{{$texto}}" type="search" placeholder="Ingrese el nombre del rol o enlance para realizar la busqueda" aria-label="Search">
        
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>                 
            </div>        
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="tabla-data">
                    <thead>
                        <tr class="text-center">
                            <th>Nombre</th>
                            <th>Enlace</th>
                            <th class="width70">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                            <tr class="text-center">
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->slug}}</td>
                                <td>
                                    <a href="{{route('editar_permiso', ['id' => $permiso->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('eliminar_permiso', ['id' => $permiso->id])}}" class="d-inline form-eliminar" method="POST">
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