<div class="form-group row">
  <label for="DNI_empleado" class="col-lg-2 control-label offset-md-1 requerido">Identidad</label>
  <div class="col-sm-8">
    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "13" name="DNI_empleado" id="DNI_empleado" maxlength="13" placeholder="Escriba su número identidad, sin guiones." class="form-control" value="{{old('DNI_empleado', $empleados->DNI_empleado ?? '')}}" required/>
  </div>
</div>

<div class="form-group row">
    <label for="primer_nombre" class="col-lg-2 control-label offset-md-1 requerido">Primer Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="primer_nombre" id="primer_nombre" placeholder="Escriba su primero nombre." class="form-control" value="{{old('primer_nombre', $empleados->primer_nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="segundo_nombre" class="col-lg-2 control-label offset-md-1 requerido">Segundo Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Escriba su segundo nombre." class="form-control" value="{{old('segundo_nombre', $empleados->segundo_nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="primer_apellido" class="col-lg-2 control-label offset-md-1 requerido">Primer Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="primer_apellido" id="primer_apellido" placeholder="Escriba su primero apellido." class="form-control" value="{{old('primer_apellido', $empleados->primer_apellido ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="segundo_apellido" class="col-lg-2 control-label offset-md-1 requerido">Segundo Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Escriba su segundo apellido." class="form-control" value="{{old('segundo_apellido', $empleados->segundo_apellido ?? '')}}" required/>
    </div>
</div>

<?php $fecha_actual = date("d-m-Y");?>

<div class="form-group row">
  <label for="fecha_ingreso" class="col-lg-2 control-label offset-md-1 requerido">Fecha de Ingreso</label>
  <div class="col-sm-8">
    <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" 
    value="{{old('fecha_ingreso', $empleados->fecha_ingreso ?? '')}}" required
    max="<?php echo date('Y-m-d',strtotime($fecha_actual));?>"/>
  </div>
</div>

<div class="form-group row">
    <label for="fecha_de_nacimiento" class="col-lg-2 control-label offset-md-1 requerido">Fecha Nacimiento</label>
    <div class="col-sm-8">
      <input type="date" name="fecha_de_nacimiento" id="fecha_de_nacimiento" class="form-control" 
      value="{{old('fecha_de_nacimiento', $empleados->fecha_de_nacimiento ?? '')}}" required
      min="<?php echo date('Y-m-d',strtotime($fecha_actual."- 60 year"));?>"
      max="<?php echo date('Y-m-d',strtotime($fecha_actual."- 18 year"));?>"/>
    </div>
</div>

<div class="form-group row">
    <label for="direccion" class="col-lg-2 control-label offset-md-1 requerido">Dirección</label>
    <div class="col-sm-8">
      <input type="text" name="direccion" id="direccion" placeholder="Escriba la dirección de su domicilio." class="form-control" value="{{old('direccion', $empleados->direccion ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="nacionalidad_id" class="col-lg-2 control-label offset-md-1 requerido">Nacionalidad</label>
    <div class="col-sm-8">
      <select name="nacionalidad_id" id="nacionalidad_id" class="form-control" required>
        <option selected="" disabled>Seleccione la nacionalidad</option>
        @foreach ($nacionalidads as $id => $Nacionalidad)
          <option value="{{$id}}" {{old('nacionalidad_id', $nacionalidads->id ?? '') == $id ? "selected" : ''}}>{{$Nacionalidad}}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="form-group row">
    <label for="telefono" class="col-lg-2 control-label offset-md-1 requerido">Teléfono de Empleado</label>
    <div class="col-sm-8">
      <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
      type = "number"
      maxlength = "8" name="telefono" maxlength="8" placeholder="Escriba un número de telefono." id="telefono" class="form-control" value="{{old('telefono', $empleados->telefono ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="contacto_de_emergencia" class="col-lg-2 control-label offset-md-1 requerido">Contacto de emergencia</label>
    <div class="col-sm-8">
      <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
      type = "number"
      maxlength = "8" name="contacto_de_emergencia" maxlength="8" placeholder="Escriba un número de emergencia." id="contacto_de_emergencia" class="form-control" value="{{old('contacto_de_emergencia', $empleados->contacto_de_emergencia ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="foto" class="col-lg-2 control-label offset-md-1">Foto</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="custom-file">
          <input class="form-control" type="file" id="foto" name="foto" value="{{old('foto', $empleados->foto ?? '')}}" multiple />
        </div>
      </div>
    </div>
</div>

<div class="form-group row">
    <label for="sexo_id" class="col-lg-2 control-label offset-md-1 requerido">Sexo</label>
    <div class="col-sm-8">
      <select name="sexo_id" id="sexo_id" class="form-control" required>
        <option selected="" disabled>Seleccione el sexo</option>
        @foreach ($sexos as $id => $Sexo)
          <option value="{{$id}}" {{old("sexo_id", $sexos->id ?? "") == $id ? "selected" : ""}}>{{$Sexo}}</option>
        @endforeach
      </select>
    </div>
</div>