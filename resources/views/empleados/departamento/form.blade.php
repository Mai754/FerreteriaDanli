<div class="form-group row">
    <label for="Nombre_departamento" class="col-lg-1 control-label offset-md-1 requerido">Nombre Del Departamento</label>

    <div class="col-sm-9">
      <input type="text" name="Nombre_departamento" id="Nombre_departamento" class="form-control" value="{{old('Nombre_departamento', $permisos->Nombre_departamento ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="Numero_departamento" class="col-lg-1 control-label offset-md-1 requerido" >Numero Del Departamento</label>

    <div class="col-sm-9">
      <input type="text" name="Numero_departamento" id="Numero_departamento" class="form-control" value="{{old('Numero_departamento', $permisos->Numero_departamento ?? '')}}" required/>
    </div>
</div>