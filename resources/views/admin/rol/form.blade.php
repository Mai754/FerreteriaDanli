<div class="form-group row">
    <label for="nombre" class="col-lg-1 control-label offset-md-1 requerido">Nombre</label>

    <div class="col-sm-9">
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>