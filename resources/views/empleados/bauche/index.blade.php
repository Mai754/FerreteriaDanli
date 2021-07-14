@extends("theme.$theme.layout")

@section('titulo')
    Empleados
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
            <h3 class="card-title">Bauches</h3>
            <div class="card-tools pull-right">

                <form class="{{route('bauche')}}" method="get">
                    <div class="input-group input-group-sm">
                        <input class="form-control" name="texto" value="{{$texto}}" type="search" placeholder="Buscar" aria-label="Search">

                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped" id="tabla-data">
                <thead>
                    <tr class="text-center">
                        <th class="width20">ID</th>
                        <th>Empleado</th>
                        <th>Departamento</th>
                        <th>Sueldo</th>
                        <th>Bauche</th>
                        <th class="width70"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sueldos as $sueldo)
                        <tr class="text-center">
                            <td>{{$sueldo->id}}</td>
                                <td class="text-center">
                                    @foreach ($sueldo->empleados as $empleado)
                                        {{$loop->last ? $empleado->primer_nombre : $empleado->primer_nombre. ','}}
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach ($sueldo->departamentos as $departamento)
                                        {{$loop->last ? $departamento->Nombre_departamento : $departamento->Nombre_departamento. ','}}
                                    @endforeach
                                </td>
                                <td>{{$sueldo->Sueldo}}</td>
                                <td></td>
                            <td>
                                <a href="" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="" class="d-inline form-eliminar" method="POST">
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