@extends("theme.$theme.layout")

@section('titulo')
    Inventario
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
                <h3 class="card-title">Inventario</h3>    
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_inventario')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>
                <br>
                <form class="{{route('inventario')}}" method="get">
                    <div class="input-group input-group-sm">
                        <a href="{{route('inventario')}}" class="btn btn-info btn-sm">X</a>
                        <input class="form-control" name="texto" autocomplete="off" value="{{$texto}}" type="search" placeholder="Ingrese el codigo, nombre del producto o marca, para realizar la busqueda" aria-label="Search">
        
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
                            <th class="width80">Código</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
                            <th>Marca</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr class="text-center">
                                <td>{{$producto->codigo_producto}}</td>
                                <td>{{$producto->nombre_producto}}</td>
                                <td>{{$producto->cantidad}}</td>
                                <td>{{$producto->precio_compra}}</td>
                                <td>{{$producto->precio_venta}}</td>
                                <td>{{$producto->marca}}</td>
                                <td>
                                    <a href="{{route('editar_inventario', ['id' => $producto->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
        </div>   
    </div>
@endsection