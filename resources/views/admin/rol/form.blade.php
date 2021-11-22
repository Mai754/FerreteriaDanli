<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1 requerido">Nombre del Rol</label>

    <div class="col-sm-8">
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba el nombre identificardor del Rol" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>