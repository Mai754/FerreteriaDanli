<div class="form-group row">
    <label for="nombre" class="col-lg-2 control-label offset-md-1 requerido">Nombre</label>
    <div class="col-sm-8">
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $usuarios->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="usuario" class="col-lg-2 control-label offset-md-1 requerido">Usuario</label>
    <div class="col-sm-8">
      <input type="text" name="usuario" id="usuario" class="form-control" value="{{old('usuario', $usuarios->usuario ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-lg-2 control-label offset-md-1 requerido">E-mail</label>
    <div class="col-sm-8">
      <input type="text" name="email" id="email" class="form-control" value="{{old('email', $usuarios->email ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-lg-2 control-label offset-md-1 {{!isset($usuarios) ? 'requerido' : ''}}">Contrasenia</label>
    <div class="col-sm-8">
      <input type="password" name="password" id="password" class="form-control" value="" {{!isset($usuarios) ? 'required' : ''}} minlength="5"/>
    </div>
</div>

<div class="form-group row">
    <label for="re_password" class="col-lg-2 control-label offset-md-1 {{!isset($usuarios) ? 'requerido' : ''}}">Repetir Contrasenia</label>
    <div class="col-sm-8">
      <input type="password" name="re_password" id="re_password" class="form-control" value="" {{!isset($usuarios) ? 'required' : ''}} minlength="5"/>
    </div>
</div>

<div class="form-group row">
    <label for="rol_id" class="col-lg-2 control-label offset-md-1 requerido">Rol</label>
    <div class="col-sm-8">
        <select name="rol_id[]" id="rol_id" class="form-control" multiple required>
            @foreach ($rols as $id => $nombre)
                <option value="{{$id}}" {{is_array (old('rol_id')) ? (is_array($id, old('rol_id')) ? 'selected' : '') : (isset($usuarios) ? ($usuarios->roles->firstWhere('id', $id) ? $id : '') : '') == $id ? "selected" : ""}}>{{$nombre}}</option>
            @endforeach
        </select>
    </div>
</div>