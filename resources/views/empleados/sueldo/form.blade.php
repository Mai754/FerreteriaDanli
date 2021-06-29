<div class="form-group row">
    <label for="Sueldo" class="col-lg-1 control-label offset-md-1 requerido">Sueldo</label>

    <div class="col-sm-9">
      <input type="text" name="Sueldo" id="Sueldo" class="form-control" value="{{old('Sueldo', $sueldos->Sueldo ?? '')}}" required/>
    </div>
</div>