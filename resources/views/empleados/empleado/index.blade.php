@extends("theme.$theme.layout")

@section('titulo')
    Empleado
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
                <h3 class="card-title">Empleados</h3>    
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_empleado')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>                   
            </div>        
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="tabla-data">
                    <thead>
                        <tr class="text-center">
                            <th class="width20">ID</th>
                            <th>Identidad</th>
                            <th>Primer Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Fecha Nacimiento</th>
                            <th>Ingreso</th>
                            <th>Nacionalidad</th>
                            <th>Contacto de Emergencia</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empleados as $empleado)
                            <tr class="text-center">
                                <td>{{$empleado->id}}</td>
                                <td>{{$empleado->DNI_empleado}}</td>
                                <td>{{$empleado->primer_nombre}}</td>
                                <td>{{$empleado->primer_apellido}}</td>
                                <td>{{$empleado->fecha_de_nacimiento}}</td>
                                <td>{{$empleado->fecha_ingreso}}</td>
                                <td>
                                    @foreach ($empleado->nacionalidads as $nacionalidad)
                                        {{$loop->last ? $nacionalidad->nacionalidad : $nacionalidad->nacionalidad. ','}}
                                    @endforeach
                                </td>
                                <td>{{$empleado->telefono}}</td>
                                <td>
                                    <a href="{{route('editar_empleado', ['id' => $empleado->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('eliminar_empleado', ['id' => $empleado->id])}}" class="d-inline form-eliminar" method="POST">
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