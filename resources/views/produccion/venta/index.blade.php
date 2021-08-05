@extends("theme.$theme.layout")

@section('titulo')
    Factura Ventas
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
            <h3 class="card-title">Facturas de Ventas</h3>
        </div>
        <div class="card-body">
            <?php $total = 0; ?>
            @foreach($ventas as $venta)
                <?php 
                    $total = $total +  $venta->total
                ?>
            @endforeach
            <div class="form-group input-group">

                <div class="col-lg-4">
                    <label>Total de Ventas</label>
                    <input type="number" class="form-control" name="fecha"  value="{{$total}}" readonly>
                </div>

                <div class="col-lg-8">
                    <form class="{{route('ventas')}}" method="get" autocomplete="off">
                        <label>Busqueda por cliente o fecha</label>
                        <div class="input-group">
                            
                            <input class="form-control" name="texto"  value="{{$texto}}" placeholder="Buscar" aria-label="Search">
            
                            <div class="input-group-append">
                                <a class="btn btn-navbar" href="{{route('ventas')}}" type="submit">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover table-striped" id="tabla-data">
                <thead>
                    <tr class="text-center">
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th class="width70">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ventas as $venta)
                        <tr class="text-center">
                            <td>{!! \Carbon\Carbon::parse($venta->created_at)->format('Y-m-d') !!}</td>
                            <td>{{$venta->nombre}}</td>
                            <td>L. {{number_format($venta->total, 2)}}</td>
                            <td>
                                <div class="card-tools pull-right">    
                                    <a href="{{route('ver_venta', $venta)}}" class="btn-accion-tabla tooltipsC" title="Ver Factura">
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