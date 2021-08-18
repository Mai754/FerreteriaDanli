<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1 requerido">DNI</label>
    <div class="col-sm-8">
      <input type="text" name="DNI" id="DNI" autocomplete="of" class="form-control" value="{{old('DNI', $proveedors->DNI ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="nombre_encargado" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre_encargado" autocomplete="of" id="nombre_encargado" class="form-control" value="{{old('nombre_encargado', $proveedors->nombre_encargado ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="apellido_encargado" class="col-lg-2 control-label offset-md-1 requerido">Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="apellido_encargado" autocomplete="of" id="apellido_encargado" class="form-control" value="{{old('apellido_encargado', $proveedors->apellido_encargado ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="nombre_empresa" class="col-lg-2 control-label offset-md-1 requerido">Empresa</label>
    <div class="col-sm-8">
      <input type="text" name="nombre_empresa" autocomplete="of" id="nombre_empresa" class="form-control" value="{{old('nombre_empresa', $proveedors->nombre_empresa ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="dirección_empresa" class="col-lg-2 control-label offset-md-1 requerido">Direccion</label>
    <div class="col-sm-8">
      <input type="text" name="dirección_empresa" autocomplete="of" id="dirección_empresa" class="form-control" value="{{old('dirección_empresa', $proveedors->dirección_empresa ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="numero_encargado" class="col-lg-2 control-label offset-md-1 requerido">Numero|Encargado</label>
    <div class="col-sm-8">
      <input type="text" name="numero_encargado" autocomplete="of" id="numero_encargado" class="form-control" value="{{old('numero_encargado', $proveedors->numero_encargado ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="numero_empresa" class="col-lg-2 control-label offset-md-1 requerido">Numero|Empresa</label>
    <div class="col-sm-8">
      <input type="text" name="numero_empresa" autocomplete="of" id="numero_empresa" class="form-control" value="{{old('numero_empresa', $proveedors->numero_empresa ?? '')}}" required/>
    </div>
</div>