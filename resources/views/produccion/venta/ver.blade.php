@extends("theme.$theme.layout")

@section('titulo')
    Factura Ventas
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        <div class="invoice p-3 mb-3">
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> Ferreteria Danli
                        <small class="float-right">{{$venta->cliente->nombre}}</small>
                    </h4>
                </div>
            </div>

            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address>
                    <strong>RTN No. 07039017970784</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    <br>
                    Telefono: (555) 539-1037<br>
                    Email: john.doe@example.com
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    <br>
                    <br>
                    <strong>Cliente</strong>
                    <br>
                    {{$venta->cliente->nombre}}
                    </address>
                </div>
            </div>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Cantidad</th>
                                <th>Producto</th>
                                <th>Codigo</th>
                                <th>Precio</th>
                                <th>Descripcion</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($venta -> inventarios as $inventario)
                                <tr class="text-center">
                                    <td>{{$inventario->cantidad}}</td>
                                    <td>{{$inventario->nombre_producto}}</td>
                                    <td>{{$inventario->codigo_producto}}</td>
                                    <td>L. {{number_format($inventario->precio, 2)}}</td>
                                    <td>{{$inventario->descripcion}}</td>
                                    <td>L. {{number_format($inventario->cantidad * $inventario->precio, 2)}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td class="text-right">L. {{number_format($total/1.15, 2)}}</td>
                                </tr>
                                <tr>
                                    <th>Impuesto:</th>
                                    <td class="text-right">L. {{number_format($total-($total/1.15), 2)}}</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td class="text-right">L. {{number_format($total, 2)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row no-print">
                <div class="col-12">
                    <a href="javascript:window.print()" id="imprimir" class="btn btn-default"><i class="fas fa-print"></i> Imprimir</a>
                    <a href="{{route('ventas')}}" class="btn btn-success float-right"><i class="fas fa-arrow-circle-left"></i>  Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection