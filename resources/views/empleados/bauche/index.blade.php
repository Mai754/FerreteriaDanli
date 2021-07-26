@extends("theme.$theme.layout")

@section('titulo')
    Bauches
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
                
                <form class="{{route('bauche')}}" method="get" autocomplete="off">
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            
                            <input class="form-control float-right" name="texto" value="{{$texto}}" type="text" placeholder="Buscar" aria-label="Search">

                            <div class="input-group-append">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="tabla-data">
                    <thead>
                        <tr class="text-center">
                            <th class="width20">ID</th>
                            <th>Empleado</th>
                            <th>Departamento</th>
                            <th>Sueldo</th>
                            <th class="width70">Bauche</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sueldos as $sueldo)
                            <tr class="text-center">
                                <td>{{$sueldo->empleado_id}}</td>
                                <td class="text-center">
                                    {{$sueldo->primer_nombre}}
                                </td>
                                <td class="text-center">
                                    {{$sueldo->Nombre_departamento}}
                                </td>
                                <td>{{$sueldo->Sueldo}}</td>
                                <td>
                                    <div class="card-tools pull-right">    
                                        <a href="{{route('crear_bauche', ['id' => $sueldo->empleado_id])}}" class="btn-accion-tabla tooltipsC" title="Ver Bauche">
                                            <i class="fa fa-folder"></i>
                                        </a>        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
        </div>   
    </div>
@endsection