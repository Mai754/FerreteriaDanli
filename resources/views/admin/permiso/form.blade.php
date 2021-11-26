<div class="form-group row">
    <label for="nombre" class="col-lg-1 control-label offset-md-1 requerido">Nombre del Permiso</label>

    <div class="col-sm-9">
      <input type="text" name="nombre" id="nombre" placeholder="Nombre identificador del permiso" class="form-control" value="{{old('nombre', $permisos->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="slug" class="col-lg-1 control-label offset-md-1 requerido" >Enlace</label>

    <div class="col-sm-9">
      <input type="text" name="slug" id="slug" placeholder="Enlace" class="form-control" value="{{old('slug', $permisos->slug ?? '')}}" required readonly/>
    </div>
</div>