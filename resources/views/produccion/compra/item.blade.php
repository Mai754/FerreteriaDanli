<div class="col-12">
    <div class="card card-info card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
          <li class="pt-2 px-3"><h2 class="card-title">Compras</h2></li>
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="false">Personal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="true">Productos</a>
          </li>
          <div class="card-tools pull-right">
            <a href="{{route('compras')}}" class="btn btn-block btn-info btn-sm">
                <i class="fa fa-fw fa-reply-all"></i> Volver
            </a>
          </div>
        </ul>
      </div>

      <div class="card-body">
        <div class="tab-content" id="custom-tabs-two-tabContent">

            <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                <form action="{{route('guardar_compras')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-8">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="text" name="codigo_factura" id="codigo_factura" placeholder="Codigo Factura" class="form-control" value="{{old('codigo_factura', $compras->codigo_factura ?? '')}}" required/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <li class="breadcrumb-item active">Proveedor</li>
                                    </div>
                                    <div class="col-sm-11">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group form-row">
                                            <div class="col-3">
                                                <a href="" class="btn btn-block btn-outline-secondary" title="Nuevo Proveedor">
                                                    <i class="fa fa-plus-circle"></i>
                                                </a>
                                            </div>
                                            
                                            <div class="col-9">
                                                <input type="text" name="id" id="id_proveedor" placeholder="id" class="form-control" value="" disabled required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="DNI" id="DNI" placeholder="N. Identidad" class="form-control" value="" disabled required/>
                                        </div>
                                    </div>
                            
                                    <div class="col-4">
                                        <div class="form-group">
                                            <select name="proveedor_id" id="proveedor_id" class="form-control" required>
                                                <option value="">Seleccion un Proveedor</option>
                                                @foreach ($proveedors as $id => $nombre)
                                                    <option value="{{$id}}" {{old("proveedor_id", $proveedors->proveedores[0]->id ?? "") == $id ? "selected" : ""}}>{{$nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nombre_empresa" id="nombre_empresa" placeholder="Empresa" class="form-control" value="" disabled required/>
                                        </div>
                                    </div>
                                    
                                    <div class="col-5">
                                        <textarea name="dirección_empresa" id="dirección_empresa" style="height: 92px;" placeholder="Direccion de la Empresa" class="form-control" value="" disabled required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <li class="breadcrumb-item active">Empleado</li>
                                    </div>
                                    <div class="col-sm-10">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group form-row">
                                <div class="col-3">
                                    <input type="number" name="Id" id="Id" placeholder="Id" class="form-control" value="" disabled required/>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="DNI_empleado" id="DNI_empleado" placeholder="N. Identidad" class="form-control" value="" disabled required/>
                                </div>
                            </div>
                    
                            <div class="form-group form-row">
                                <div class="col-12">
                                    <select name="empleado_id" id="empleado_id" class="form-control" required>
                                        <option value="">Seleccion un Empleado</option>
                                        @foreach ($empleados as $id => $nombre)
                                            <option value="{{$id}}" {{old("empleado_id", $empleados->empleados[0]->id ?? "") == $id ? "selected" : ""}}>{{$nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    
                            <div class="form-group form-row">
                                <div class="col-12">
                                    <input type="text" name="primer_apellido" id="primer_apellido" placeholder="Apellido" class="form-control" value="" disabled required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('includes.boton-form-crear')
                </form>
            </div>

            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-1">
                            <li class="breadcrumb-item active">Productos</li>
                        </div>
                        <div class="col-sm-11">
                            <hr>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <form action="" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <input type="text" name="codigo_producto" id="codigo_producto" placeholder="Codigo del producto" class="form-control" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Nombre_del_producto" id="Nombre_del_producto" placeholder="Nombre del producto" class="form-control" value="" required/>
                                </div>
                            </div>
                            <div class="col-4">
                                <textarea name="descripcion_del_producto" id="descripcion_del_producto" style="height: 92px;" placeholder="Descripcion" class="form-control" value="" required></textarea>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="number" name="Nombre_del_producto" id="Nombre_del_producto" placeholder="Cantidad" class="form-control" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Nombre_del_producto" id="Nombre_del_producto" placeholder="Marca" class="form-control" value="" required/>
                                </div>
                                
                            </div>
                
                            <div class="col-3">
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Lps.</span>
                                        </div>
                                        <input type="number" name="Nombre_del_producto" id="Nombre_del_producto" placeholder="Precio" class="form-control" value="" required/>
                                    </div>
                                </div>
                
                                <div class="form-group form-row">
                                    <div class="col-9">
                                        <div class="input-group">
                                            <input type="number" name="Nombre_del_producto" id="Nombre_del_producto" placeholder="Impuesto" class="form-control" value=""/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-block btn-outline-info" title="Agregar Producto">
                                                <i class="fa fa-plus-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                
                                
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
                
                <hr>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="text-center">
                                        <th class="width70">Cantidad</th>
                                        <th>Producto</th>
                                        <th>Codigo</th>
                                        <th>Descripcion</th>
                                        <th>Marca</th>
                                        <th class="width70">Subtotal</th>
                                        <th class="width70"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <p class="lead">Payment Methods:</p>
                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                plugg
                                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                            </p>
                        </div>
                
                        <div class="col-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Subtotal</span>
                                    </div>
                                    <input type="number" name="subtotal" id="subtotal" class="form-control" placeholder="0.00" value="" disabled required/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Lps.</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Impuesto (15%)</span>
                                    </div>
                                    <input type="number" name="impuesto" id="impuesto" class="form-control" placeholder="0.00" value="" disabled required/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Lps.</span>
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Total</span>
                                    </div>
                                    <input type="number" name="total" id="total" class="form-control" placeholder="0.00" value="" disabled required/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Lps.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
  </div>