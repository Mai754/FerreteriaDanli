@extends("theme.$theme.layout")

@section('titulo')
    Factura Ventas
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="content-header">
    @include('includes.form-error')
    @include('includes.mensaje')
    <div class="invoice p-3 mb-3">
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"></i> Ferreteria Danli
                    <small class="float-right"><?php echo date("Y-m-d");?></small>
                </h4>
            </div>
        </div>

        <div class="row invoice-info">
            <div class="col-sm-6 invoice-col">
                <address>
                <strong>RTN No. 07039017970784</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                </address>
            </div>
            <div class="col-sm-6 invoice-col">
                <br>
                Telefono: (555) 539-1037<br>
                Email: john.doe@example.com
                </address>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <form action="{{route("terminarOCancelarVenta")}}" method="post">
                @csrf

                <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <button name="accion" value="terminar" type="submit" class="btn btn-success btn-sm tooltipsC" title="Terminar">
                                    <i class="fa fa-check"></i>
                                </button>

                                <button name="accion" value="cancelar" type="submit" class="btn btn-danger btn-sm tooltipsC" title="Cancelar">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="Nombre Vendedor" id="exampleFormControlInput1" value= "{{session()->get('nombre')}}"  readonly>
                    </div>

                    <div class="col-lg-6">
                        <select class="form-control" name="id_cliente" id="id_cliente" required>
                            <option value="" selected="" disabled>Seleccione un Cliente</option>
                            @foreach($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="col-lg-5">
                        <input id="id_cliente" autocomplete="off" required autofocus name="id_cliente" type="text"
                            class="form-control" placeholder="Nombre del Cliente" readonly>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-group">
                            <button type="button" class="btn btn-info btn-block tooltipsC" title="Nuevo Cliente" data-toggle="modal" data-target="#clienteModal"
                            data-whatever="@mdo">
                            Cliente
                            </button>
                        </div>
                    </div> -->
                </div>

                <div class="modal fade bd-example-modal-lg" id="clienteModal" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <style>
                            h1{
                                color: black;
                            }
                        </style>
                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Seleccione un Cliente</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="search" placeholder="Buscar">
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="btn btn-info btn-block" href="{{route('crear_cliente')}}">Nuevo Cliente</a>
                                            </div>
                                        </div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                                        <script>
                                            $(document).ready(function(){
                                                $("#search").keyup(function(){
                                                    _this = this;
                                                    $.each($("#mytable1 tbody tr"), function() {
                                                        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                                                            $(this).hide();
                                                        else
                                                            $(this).show();
                                                    });
                                                });
                                            });
                                        </script>
                                    </form>
                                    <br>
                                    <table  class="table table-striped" id="mytable1" cellspacing="0" style="width: 100%;">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido</th>
                                                <th scope="col">Numero de Telefono</th>
                                                <th>Copie El Nombre</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($clientes as $cliente)
                                                <tr class="text-center">
                                                    <td >{{$cliente->nombre}}</td>
                                                    <td >{{$cliente->apellido}}</td>
                                                    <td >{{$cliente->telefono}}</td>
                                                    <td>
                                                        <button data-dismiss="modal" onclick="var inputNombre = document.getElementById('id_cliente');
                                                        inputNombre.value = '{{$cliente->nombre}}'" class="btn btn-outline-info" value="{{$cliente->id}}"> Agregar </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="form-group">
            <form action="{{route("agregarProductoVenta")}}" method="post">
                @csrf
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-info btn-block tooltipsC" title="Agregar Producto Automatico" data-toggle="modal" data-target="#productoModal"data-whatever="@mdo">
                            Productos
                        </button>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input id="codigo_producto" autocomplete="off" required autofocus name="codigo_producto" type="text"
                                class="form-control" placeholder="Código de Producto">
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input id="cantidad" autocomplete="off" required autofocus name="cantidad" type="number"
                                class="form-control" placeholder="Cantidad">
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-info btn-block tooltipsC" title="Facturar">+</button>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" id="productoModal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Seleccione un Producto</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="search2" placeholder="Buscar">
                                        </div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                                        <script>
                                            $(document).ready(function(){
                                                $("#search2").keyup(function(){
                                                    _this = this;
                                                    $.each($("#mytable2 tbody tr"), function() {
                                                        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                                                            $(this).hide();
                                                        else
                                                            $(this).show();
                                                    });
                                                });
                                            });
                                        </script>
                                    </form>
                                    <table  class="table table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Código</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Precio venta</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Copie el Código</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($inventarios as $inventario)
                                                <tr class="text-center">
                                                    <td id="{{$inventario->codigo_producto}}"> {{$inventario->codigo_producto}}</td>
                                                    <td>{{$inventario->nombre_producto}}</td>
                                                    <td >{{$inventario->precio_venta}}</td>
                                                    <td >{{$inventario->cantidad}}</td>
                                                    <td>
                                                        <button data-dismiss="modal" onclick="var inputN = document.getElementById('codigo_producto');
                                                        inputN.value = '{{$inventario->codigo_producto}}'" class="btn btn-outline-info" value="{{$inventario->id}}">Agregar</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <hr>

        <?php $total = 0?>
        @if(session("inventarios") !== null)
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Código de Productos</th>
                                <th>Nombre Del Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session("inventarios") as $inventario)
                                <tr>
                                    <td class="text-center">
                                        <a type="button" title="Cancelar Este Producto" class="btn-accion-tabla eliminar tooltipsC" href="{{route('quitarProductoDeVenta')}}">
                                            <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>{{$inventario->codigo_producto}}</td>
                                    <td>{{$inventario->nombre_producto}}</td>
                                    <td>{{$inventario->cantidad}}</td>
                                    <td class="text-right">L. {{number_format($inventario->precio_venta, 2)}}</td>
                                    <td class="text-right">L. {{number_format($inventario->precio_venta * $inventario->cantidad, 2)}}</td>
                                    <?php $total = $total + $inventario->precio_venta * $inventario->cantidad?>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
            <div class="row">
                <div class="col-8">

                </div>
                <div class="col-4">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td class="text-right">L. {{number_format($total/1.15, 2)}}</td>
                                </tr>
                                <tr>
                                    <th>Impuesto: </th>
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
        @else
            <tr>Aqui apareceran los productos de la venta, cuando ingrese el codigo y la cantidad.</tr>
        @endif

        

    </div>
</div>
@endsection