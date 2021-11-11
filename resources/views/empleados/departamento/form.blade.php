<div class="form-group row">
  <label for="empleado_id" class="col-lg-2 control-label offset-md-1 requerido">Jefe de Departamento</label>
  <div class="col-sm-8">
    <select name="empleado_id" id="empleado_id" class="form-control" required>
        <option selected="" disabled>Seleccione El Jefe</option>
        @foreach ($empleados as $id => $primer_nombre)
          <option value="{{$id}}" {{old('empleado_id', $empleados->id ?? '') == $id ? "selected" : ''}}>{{$primer_nombre}}</option>
        @endforeach
    </select>
  </div>
</div>

<div class="form-group row">
    <label for="Nombre_departamento" class="col-lg-1 control-label offset-md-1 requerido">Nombre</label>

    <div class="col-sm-9">
      <input type="text" name="Nombre_departamento" placeholder="Nombre identificador del departamento" id="Nombre_departamento" class="form-control" value="{{old('Nombre_departamento', $departamentos->Nombre_departamento ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="Numero_departamento" class="col-lg-2.5 control-label offset-md-1 requerido" >Número de departamento</label>

    <div class="col-sm-8">
      <input type="text" name="Numero_departamento" id="Numero_departamento" placeholder="Número que tendra asignado el departamento" class="form-control" value="{{old('Numero_departamento', $departamentos->Numero_departamento ?? '')}}" required/>
    </div>
</div>