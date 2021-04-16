<div class="form-group row">
  <label for="codigo_producto" class="col-lg-2 control-label offset-md-1 requerido">Codigo</label>
  <div class="col-sm-8">
    <input type="text" name="codigo_producto" id="codigo_producto" class="form-control" value="{{old('codigo_producto', $producto->codigo_producto ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
    <label for="Nombre_del_producto" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="Nombre_del_producto" id="Nombre_del_producto" class="form-control" value="{{old('nombre', $producto->Nombre_del_producto ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="descripcion_del_producto" class="col-lg-2 control-label offset-md-1 requerido">Descripcion</label>
    <div class="col-sm-8">
      <input type="text" name="descripcion_del_producto" id="descripcion_del_producto" class="form-control" value="{{old('descripcion_del_producto', $producto->descripcion_del_producto ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="marcar_del_producto" class="col-lg-2 control-label offset-md-1 requerido">Marca</label>
    <div class="col-sm-8">
      <input type="text" name="marcar_del_producto" id="marcar_del_producto" class="form-control" value="{{old('marcar_del_producto', $producto->marcar_del_producto ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
  <label for="foto" class="col-lg-2 control-label offset-md-1">Foto</label>
  <div class="col-sm-8">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="foto" value="{{old('foto', $producto->foto ?? '')}}"/>
      <label class="custom-file-label" for="foto"></label>
    </div>
  </div>
</div>