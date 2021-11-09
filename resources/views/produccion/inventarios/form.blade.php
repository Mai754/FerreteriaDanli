<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
  <label for="codigo_producto" class="col-lg-2 control-label offset-md-1 requerido">Código</label>
  <div class="col-sm-8">
    <input type="number" name="codigo_producto" autocomplete="off" placeholder="Código del producto" id="codigo_producto" class="form-control" value="{{old('codigo_producto', $productos->codigo_producto ?? '')}}" required/>
  </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
    <label for="nombre_producto" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre_producto" autocomplete="off" placeholder="Nombre del producto" id="nombre_producto" class="form-control" value="{{old('nombre_producto', $productos->nombre_producto ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-lg-2 control-label offset-md-1 {{!isset($productos) ? 'requerido' : ''}}">Descripción</label>
    <div class="col-sm-8">
      <input type="text" name="descripcion" autocomplete="off" placeholder="Describa correctamente del producto" id="descripcion" class="form-control" value="{{old('descripcion', $productos->descripcion ?? '')}}" {{!isset($productos) ? 'required' : ''}}/>
    </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
    <label for="marca" class="col-lg-2 control-label offset-md-1">Marca</label>
    <div class="col-sm-8">
      <input type="text" name="marca" id="marca" autocomplete="off" placeholder="Escriba si existe marca del producto." class="form-control" value="{{old('marca', $productos->marca ?? '')}}"/>
    </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
  <label for="cantidad" class="col-lg-2 control-label offset-md-1 requerido">Cantidad</label>
  <div class="col-sm-8">
    <input type="number" name="cantidad" id="cantidad" autocomplete="off" placeholder="Cantidades existentes del producto" class="form-control" value="{{old('cantidad', $productos->cantidad ?? '')}}" required/>
  </div>
</div>

<div class="form-group row {{!isset($productos) ? '' : 'd-none'}}">
  <label for="precio_compra" class="col-lg-2 control-label offset-md-1 requerido">Precio de compra</label>
  <div class="col-sm-8">
    <input type="number" name="precio_compra" autocomplete="off" id="precio_compra" placeholder="Precio de compra del producto" class="form-control" value="{{old('precio_compra', $productos->precio_compra ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
  <label for="precio_venta" class="col-lg-2 control-label offset-md-1 {{!isset($productos) ? 'requerido' : ''}}">Precio de venta</label>
  <div class="col-sm-8">
    <input type="number" name="precio_venta" autocomplete="off" id="precio_venta" placeholder="Precio de venta del producto" class="form-control" value="{{old('precio_venta', $productos->precio_venta ?? '')}}" {{!isset($productos) ? 'required' : ''}}/>
  </div>
</div>