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