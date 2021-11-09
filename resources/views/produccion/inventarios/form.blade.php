<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
  <label for="codigo_producto" class="col-lg-2 control-label offset-md-1 requerido">Codigo</label>
  <div class="col-sm-8">
    <input type="text" name="codigo_producto" autocomplete="of" id="codigo_producto" class="form-control" value="{{old('codigo_producto', $productos->codigo_producto ?? '')}}" required readonly/>
  </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
    <label for="nombre_producto" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre_producto" autocomplete="of" id="nombre_producto" class="form-control" value="{{old('nombre_producto', $productos->nombre_producto ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-lg-2 control-label offset-md-1 {{!isset($productos) ? 'requerido' : ''}}">Descripcion</label>
    <div class="col-sm-8">
      <input type="text" name="descripcion" autocomplete="of" placeholder="Describa correctamente el producto" id="descripcion" class="form-control" value="{{old('descripcion', $productos->descripcion ?? '')}}" {{!isset($productos) ? 'required' : ''}}/>
    </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
    <label for="marca" class="col-lg-2 control-label offset-md-1">Marca</label>
    <div class="col-sm-8">
      <input type="text" name="marca" id="marca" autocomplete="of" placeholder="Si tiene Marca" class="form-control" value="{{old('marca', $productos->marca ?? '')}}"/>
    </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
  <label for="cantidad" class="col-lg-2 control-label offset-md-1 requerido">Cantidad</label>
  <div class="col-sm-8">
    <input type="number" name="cantidad" id="cantidad" autocomplete="of" class="form-control" value="{{old('cantidad', $productos->cantidad ?? '')}}" required/>
  </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
  <label for="precio_compra" class="col-lg-2 control-label offset-md-1 requerido">Precio de compra</label>
  <div class="col-sm-8">
    <input type="decimal(9,2)" name="precio_compra" autocomplete="of" id="precio_compra" class="form-control" value="{{old('precio_compra', $productos->precio_compra ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
  <label for="precio_venta" class="col-lg-2 control-label offset-md-1 {{!isset($productos) ? 'requerido' : ''}}">Precio de venta</label>
  <div class="col-sm-8">
    <input type="decimal(9,2)" name="precio_venta" autocomplete="of" id="precio_venta" class="form-control" value="{{old('precio_venta', $productos->precio_venta ?? '')}}" {{!isset($productos) ? 'required' : ''}}/>
  </div>
</div>