<div class="form-group row">
  <label for="identidad" class="col-lg-2 control-label offset-md-1 requerido">DNI</label>
  <div class="col-sm-8">
    <input type="number" name="identidad" id="identidad" class="form-control" value="{{old('identidad', $clientes->identidad ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $clientes->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="apellido" class="col-lg-2 control-label offset-md-1 requerido">Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="apellido" id="apellido" class="form-control" value="{{old('apellido', $clientes->apellido ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
  <label for="telefono" class="col-lg-2 control-label offset-md-1 requerido">Teléfono</label>
  <div class="col-sm-8">
    <input type="number" name="telefono" id="telefono" class="form-control" value="{{old('telefono', $clientes->telefono ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
  <label for="direccion" class="col-lg-2 control-label offset-md-1 requerido">Dirección</label>
  <div class="col-sm-8">
    <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $clientes->direccion ?? '')}}" required/>
  </div>
</div>