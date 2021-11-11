<div class="form-group row">
  <label for="identidad" class="col-lg-2 control-label offset-md-1 requerido">Identidad</label>
  <div class="col-sm-8">
    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "13" name="identidad" id="identidad" placeholder="Escribir la identidad del cliente" class="form-control" value="{{old('identidad', $clientes->identidad ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre" id="nombre" placeholder="Escribir el nombre del cliente" class="form-control" value="{{old('nombre', $clientes->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="apellido" class="col-lg-2 control-label offset-md-1 requerido">Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="apellido" id="apellido" placeholder="Escribir el apellido del cliente" class="form-control" value="{{old('apellido', $clientes->apellido ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
  <label for="telefono" class="col-lg-2 control-label offset-md-1 requerido">Teléfono</label>
  <div class="col-sm-8">
    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "8"  name="telefono" id="telefono" placeholder="Escribir el teléfono del cliente" class="form-control" value="{{old('telefono', $clientes->telefono ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
  <label for="direccion" class="col-lg-2 control-label offset-md-1 requerido">Dirección</label>
  <div class="col-sm-8">
    <input type="text" name="direccion" id="direccion" placeholder="Escribir la dirección exacta del cliente" class="form-control" value="{{old('direccion', $clientes->direccion ?? '')}}" required/>
  </div>
</div>