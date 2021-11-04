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
                        <i class="fa fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>
                <br>
                <form class="{{route('permiso')}}" method="get">
                    <div class="input-group input-group-sm">
                        <input class="form-control" name="texto" value="{{$texto}}" type="search" placeholder="Buscar" aria-label="Search" autocomplete="off">
        
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
                            <th class="width20">ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                            <tr class="text-center">
                                <td>{{$permiso->id}}</td>
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
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item">
                      <a class="page-link" href="#"></a>
                    </li>
                </ul>
                {{$permisos->links()}}
            </div>
        </div>   
    </div>
@endsection