<div class="form-group row">
    <label for="nombre" class="col-lg-1 control-label offset-md-1 requerido">Nombre</label>

    <div class="col-sm-9">
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="url" class="col-lg-1 control-label offset-md-1 requerido" >Url</label>

    <div class="col-sm-9">
      <input type="text" name="url" id="url" class="form-control" value="{{old('url', $data->url ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="icono" class="col-lg-1 control-label offset-md-1" >Icono</label>

    <div class="col-sm-9">
      <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono', $data->icono ?? '')}}"/>
    </div>
    <div class="col-lg-1">
        <span id="mostrar-icono" class="fas {{old("icono")}}"></span>
    </div>
</div>