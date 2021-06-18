@extends("theme.$theme.layout")

@section('titulo')
    Departamentos
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
                <h3 class="card-title">Departamentos</h3>    
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_departamento')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>                   
            </div>        
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="tabla-data">
                    <thead>
                        <tr class="text-center">
                            <th class="width20">ID</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                            <th>Numero</th>
                            <th>Empleados</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>   
        </div>   
    </div>
@endsection