<div class="form-group row">
  <label for="tipo_id" class="col-lg-2 control-label offset-md-1 requerido">Tipo de Pago</label>
  <div class="col-sm-8">
    <select name="tipo_id" id="tipo_id" class="custom-select form-control-border" required>
      <option selected="" disabled>Seleccione El Tipo</option>
      @foreach ($tipos as $id => $tipo)
        <option value="{{$id}}" {{old('tipo_id', $tipos->id ?? '') == $id ? "selected" : ''}}>{{$tipo}}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="departamento_id" class="col-lg-2 control-label offset-md-1 requerido">Departamento</label>
  <div class="col-sm-8">
    <select name="departamento_id" id="departamento_id" class="custom-select form-control-border" required>
      <option selected="" disabled>Seleccione un Departamento</option>
      @foreach ($departamentos as $id => $Nombre_departamento)
        <option value="{{$id}}" {{old('departamento_id', $departamentos->id ?? '') == $id ? "selected" : ''}}>{{$Nombre_departamento}}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="empleado_id" class="col-lg-2 control-label offset-md-1 requerido">Empleados</label>
  <div class="col-sm-8">
    <select name="empleado_id" id="empleado_id" class="custom-select form-control-border" required>
      <option selected="" disabled>Seleccione un Empleado</option>
      @foreach ($empleados as $id => $primer_nombre)
        <option value="{{$id}}" {{old('empleado_id', $empleados->id ?? '') == $id ? "selected" : ''}}>{{$primer_nombre}}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="form-group row">
    <label for="Sueldo" class="col-lg-1 control-label offset-md-1 requerido">Sueldo</label>
    <div class="col-sm-9">
      <input type="number" name="Sueldo" id="Sueldo" class="form-control" value="{{old('Sueldo', $sueldos->Sueldo ?? '')}}" required/>
    </div>
</div>