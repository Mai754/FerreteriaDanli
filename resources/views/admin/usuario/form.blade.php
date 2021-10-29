<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" placeholder="Escriba nombre completo" maxlength="50" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $usuarios->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="usuario" class="col-lg-2 control-label offset-md-1 requerido">Usuario</label>
    <div class="col-sm-8">
      <input type="text" placeholder="Escriba nombre de usuario"   name="usuario" id="usuario" class="form-control" value="{{old('usuario', $usuarios->usuario ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-lg-2 control-label offset-md-1 requerido">Correo Electrónico</label>
    <div class="col-sm-8">
      <input type="text" name="email" id="email" maxlength="50" placeholder="Escriba un correo electrónico" class="form-control" value="{{old('email', $usuarios->email ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-lg-2 control-label offset-md-1 {{!isset($usuarios) ? 'requerido' : ''}}">Contraseña</label>
    <div class="col-sm-8">
      <input type="password" name="password" id="password" placeholder="Escriba una contraseña" class="form-control" value="" {{!isset($usuarios) ? 'required' : ''}} minlength="5"/>
    </div>
</div>

<div class="form-group row">
    <label for="re_password" class="col-lg-2 control-label offset-md-1 {{!isset($usuarios) ? 'requerido' : ''}}">Repetir Contraseña</label>
    <div class="col-sm-8">
      <input type="password" name="re_password" id="re_password" placeholder="Repita la contraseña" class="form-control" value="" {{!isset($usuarios) ? 'required' : ''}} minlength="5"/>
    </div>
</div>

<div class="form-group row">
    <label for="rol_id" class="col-lg-2 control-label offset-md-1 requerido">Rol</label>
    <div class="col-sm-8">
      <select name="rol_id[]" id="rol_id" class="form-control" multiple required>
        @foreach($rols as $id => $nombre)
          <option value="{{$id}}" {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}>{{$nombre}}</option>
        @endforeach
      </select>
    </div>
</div>