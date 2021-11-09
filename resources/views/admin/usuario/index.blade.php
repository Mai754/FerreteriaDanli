@extends("theme.$theme.layout")

@section('titulo')
    Usuarios
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
                <h3 class="card-title">Usuarios</h3>    
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_usuario')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>
                <br>
                <form class="{{route('usuario')}}" method="get">
                    <div class="input-group input-group-sm">

                        <input class="form-control" name="texto" value="{{$texto}}" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">

                        <input class="form-control" name="texto" value="{{$texto}}" 
                        type="search" placeholder="Ingrese el usuario, el nombre o el correo electronico para realizar la busqueda" aria-label="Search">

        
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
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Roles</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->usuario}}</td>
                                <td>{{$usuario->nombre}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    @foreach ($usuario->roles as $rol)
                                        {{$loop->last ? $rol->nombre : $rol->nombre. ','}}
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('editar_usuario', ['id' => $usuario->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @if ($usuario->id != 1)
                                        @if ($usuario->id != auth()->id())
                                            <form action="{{route('eliminar_usuario', ['id' => $usuario->id])}}" class="d-inline form-eliminar" method="POST">
                                                @csrf @method("delete")
                                                <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                        @endif
                                    @if ( $usuario->id != 1)
                                    @if ( $usuario->id != auth()->id())
                                        <form action="{{route('eliminar_usuario', ['id' => $usuario->id])}}" class="d-inline form-eliminar" method="POST">
                                            @csrf @method("delete")
                                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                <i class="fa fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
        </div>   
    </div>
@endsection