<div class="form-group row">
    <label for="nombre_cliente" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="{{old('nombre_cliente', $clientes->nombre_cliente ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="apellido_cliente" class="col-lg-2 control-label offset-md-1 requerido">Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="apellido_cliente" id="apellido_cliente" class="form-control" value="{{old('apellido_cliente', $clientes->apellido_cliente ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="numero_de_telefono" class="col-lg-2 control-label offset-md-1 requerido">Numero de Telefono</label>
    <div class="col-sm-8">
      <input type="text" name="numero_de_telefono" id="numero_de_telefono" class="form-control" value="{{old('numero_de_telefono', $clientes->numero_de_telefono ?? '')}}" required/>
    </div>
</div>