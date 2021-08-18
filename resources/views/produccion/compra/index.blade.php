@extends("theme.$theme.layout")

@section('titulo')
    Factura Compras
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
            <h3 class="card-title">Facturas de Compras</h3>
        </div>
        <div class="card-body">
            <?php $total = 0; ?>
            @foreach($compras as $compra)
                <?php 
                    $total = $total +  $compra->total
                ?>
            @endforeach
            <div class="form-group input-group">

                <div class="col-lg-4">
                    <label>Total de Compras</label>
                    <input type="number" class="form-control" name="fecha"  value="{{$total}}" readonly>
                </div>

                <div class="col-lg-8">
                    <form class="{{route('compras')}}" method="get" autocomplete="off">
                        <label>Busqueda por proveedor o fecha</label>
                        <div class="input-group">
                            
                            <input class="form-control" name="texto"  value="{{$texto}}" placeholder="Buscar" aria-label="Search">
            
                            <div class="input-group-append">
                                <a class="btn btn-navbar" href="{{route('compras')}}" type="submit">
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
                        <th>Proveedor</th>
                        <th>Total</th>
                        <th class="width70">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($compras as $compra)
                        <tr class="text-center">
                            <td>{!! \Carbon\Carbon::parse($compra->created_at)->format('Y-m-d') !!}</td>
                            <td>{{$compra->nombre_encargado}}</td>
                            <td>L. {{number_format($compra->total, 2)}}</td>
                            <td>
                                <div class="card-tools pull-right">    
                                    <a href="{{route('ver_compra', $compra)}}" class="btn-accion-tabla tooltipsC" title="Ver Factura">
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