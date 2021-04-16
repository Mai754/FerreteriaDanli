<div class="form-group row">
    <label for="DNI_empleado" class="col-lg-2 control-label offset-md-1 requerido">Identidad</label>
    <div class="col-sm-8">
      <input type="text" name="DNI_empleado" id="DNI_empleado" class="form-control" value="{{old('DNI_empleado', $empleados->DNI_empleado ?? '')}}" required/>
    </div>

    
</div>
<div class="form-group row">
    <label for="primer_nombre" class="col-lg-2 control-label offset-md-1 requerido">Primer Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="primer_nombre" id="primer_nombre" class="form-control" value="{{old('primer_nombre', $empleados->primer_nombre ?? '')}}" required/>
    </div>

    
</div>
<div class="form-group row">
    <label for="segundo_nombre" class="col-lg-2 control-label offset-md-1 requerido">Segundo Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control" value="{{old('segundo_nombre', $empleados->segundo_nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="primer_apellido" class="col-lg-2 control-label offset-md-1 requerido">Primer Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="primer_apellido" id="primer_apellido" class="form-control" value="{{old('primer_apellido', $empleados->primer_apellido ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="segundo_apellido" class="col-lg-2 control-label offset-md-1 requerido">Segundo Apellido</label>
    <div class="col-sm-8">
      <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control" value="{{old('segundo_apellido', $empleados->segundo_apellido ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="fecha_de_nacimiento" class="col-lg-2 control-label offset-md-1 requerido">Fecha Nacimiento</label>
    <div class="col-sm-8">
      <input type="date" name="fecha_de_nacimiento" id="fecha_de_nacimiento" class="form-control" value="{{old('fecha_de_nacimiento', $empleados->fecha_de_nacimiento ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="direccion" class="col-lg-2 control-label offset-md-1 requerido">Direccion</label>
    <div class="col-sm-8">
      <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $empleados->direccion ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="nacionalidad" class="col-lg-2 control-label offset-md-1 requerido">Nacionalidad</label>
    <div class="col-sm-8">
      <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="{{old('nacionalidad', $empleados->nacionalidad ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="contacto_de_emergencia" class="col-lg-2 control-label offset-md-1 requerido">Contacto de emergencia</label>
    <div class="col-sm-8">
      <input type="text" name="contacto_de_emergencia" id="contacto_de_emergencia" class="form-control" value="{{old('contacto_de_emergencia', $empleados->contacto_de_emergencia ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="foto" class="col-lg-2 control-label offset-md-1">Foto</label>
    
    <div class="col-sm-8">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="foto" value="{{old('foto', $empleados->foto ?? '')}}"/>
        <label class="custom-file-label" for="foto"></label>
      </div>
    </div>
</div>

<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1">Sexo</label>
    <div class="col-sm-8">
      <input type="text" name="sexo" id="sexo" class="form-control" value="{{old('sexo', $empleados->sexo ?? '')}}"/>
    </div>
</div>