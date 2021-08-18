@extends("theme.$theme.layout")

@section('titulo')
    Factura Compras
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/compras/crear.js")}}" type="text/javascript"></script>
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
            <form action="{{route("terminarOCancelarCompra")}}" method="post">
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

                    <div class="col-lg-4">
                        <label for=""> Empleado</label>
                        <input type="text" class="form-control" placeholder="Nombre Vendedor" id="exampleFormControlInput1" value= "{{session()->get('nombre_usuario')}}" readonly>
                    </div>

                    <div class="col-lg-1">
                        <input id="id_proveedor" autocomplete="off" required autofocus name="id_proveedor" type="text"
                            class="form-control d-none" placeholder="id" readonly>
                    </div>

                    <div class="col-lg-5">
                        <label for=""> Proveedores [<a href="{{route('crear_proveedor')}}" style="color: #17A2BB">Nuevo Proveedor</a>]</label>
                        <input id="nombre_encargado" autocomplete="off" required autofocus name="nombre_encargado" type="text"
                            class="form-control" placeholder="Nombre del Proveedor" readonly>
                    </div>

                    <div class="col-lg-2">
                        <label for=""> Buscar</label>
                        <div class="form-group">
                            <button type="button" class="btn btn-info btn-block tooltipsC" title="Buscar Proveedor" data-toggle="modal" data-target="#clienteModal"
                            data-whatever="@mdo">
                            Proveedor
                            </button>
                        </div>
                    </div>
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
                                <h4 class="modal-title">Seleccione un Proveedor</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body  p-0">
                                <form>
                                    <table  class="table table-striped" id="mytable1" cellspacing="0" style="width: 100%;">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido</th>
                                                <th scope="col">Nombre de la Empresa</th>
                                                <th scope="col">Numero de Telefono</th>
                                                <th>Copie El Nombre</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($proveedors as $proveedor)
                                                <tr class="text-center">
                                                    <td >{{$proveedor->nombre_encargado}}</td>
                                                    <td >{{$proveedor->apellido_encargado}}</td>
                                                    <td >{{$proveedor->nombre_empresa}}</td>
                                                    <td >{{$proveedor->numero_encargado}}</td>
                                                    <td>
                                                        <button data-dismiss="modal" onclick="
                                                        
                                                        var inputid = document.getElementById('id_proveedor');
                                                        var inputNombre = document.getElementById('nombre_encargado');
                                                        inputid.value = '{{$proveedor->id}}'
                                                        inputNombre.value = '{{$proveedor->nombre_encargado}}'"
                                                        class="btn btn-outline-info" value="{{$proveedor->id}}"> Agregar </button>
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
            <form action="{{route("agregarProductoCompra")}}" method="post">
                @csrf
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input id="codigo_producto" autocomplete="off" required autofocus name="codigo_producto" type="text"
                                class="form-control" placeholder="Código" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <input id="nombre_producto" autocomplete="off" required autofocus name="nombre_producto" type="text"
                                class="form-control" placeholder="Nombre de Producto" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <input id="marca" autocomplete="off" required autofocus name="marca" type="text"
                                class="form-control" placeholder="Marca" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input id="precio_compra" autocomplete="off" required autofocus name="precio_compra" type="decimal(9,2)"
                                class="form-control" placeholder="Precio de Compra" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <input id="precio_venta" autocomplete="off" required autofocus name="precio_venta" type="decimal(9,2)"
                                class="form-control" placeholder="Precio de Venta" required>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input id="cantidad" autocomplete="off" required autofocus name="cantidad" type="number"
                                class="form-control" placeholder="Cantidad" required>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-info btn-block tooltipsC" title="Facturar">+</button>
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
                                <th>Marca</th>
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
                                    <td>{{$inventario->marca}}</td>
                                    <td>{{$inventario->cantidad}}</td>
                                    <td class="text-right">L. {{number_format($inventario->precio_compra, 2)}}</td>
                                    <td class="text-right">L. {{number_format($inventario->precio_compra * $inventario->cantidad, 2)}}</td>
                                    <?php $total = $total + $inventario->precio_compra * $inventario->cantidad?>
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
                                    <td class="text-right">L. {{number_format($total-($total/1.25), 2)}}</td>
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
            <tr>Aqui apareceran los productos de la <strong>COMPRA</strong>, cuando llene los campos del producto.</tr>
        @endif
    </div>
</div>
@endsection