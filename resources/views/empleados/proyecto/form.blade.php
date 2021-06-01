<div class="col-md-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">General</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
            <label for="nombre_del_proyecto" class="control-label requerido">Nombre del Proyecto</label>
            <input type="text" name="nombre_del_proyecto" id="nombre_del_proyecto" class="form-control" value="{{old('nombre_del_proyecto', $proyectos->nombre_del_proyecto ?? '')}}" required/>
        </div>
        <div class="form-group">
            <label for="descripcion" class="control-label requerido">Descripcion del Proyecto</label>
            <input id="descripcion" name="descripcion" class="form-control" value="{{old('descripcion', $proyectos->descripcion ?? '')}}" required></textarea>
        </div>

        <div class="form-group">
            <label for="estado_id" class="control-label requerido">Estado</label>
            <select name="estado_id" id="estado_id" class="form-control" required>
                <option selected="" disabled>Seleccione el Estado</option>
                @foreach ($estados as $id => $nombre)
                    <option value="{{$id}}" {{old("estado_id", $proyectos->id ?? "") == $id ? "selected" : ""}}>{{$nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
          <label for="cliente_id" class="control-label requerido">Cliente</label>
          <select name="cliente_id" id="cliente_id" class="form-control" required>
              <option selected="" disabled>Seleccione un Cliente</option>
              @foreach ($clientes as $id => $nombre_cliente)
                  <option value="{{$id}}" {{old("cliente_id", $proyectos->id ?? "") == $id ? "selected" : ""}}>{{$nombre_cliente}}</option>
              @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="empleado_id" class="control-label requerido">Lider del Proyecto</label>
          <select name="empleado_id" id="empleado_id" class="form-control" required>
              <option selected="" disabled>Seleccione un Empleado</option>
              @foreach ($empleados as $id => $primer_nombre)
                  <option value="{{$id}}" {{old("empleado_id", $proyectos->id ?? "") == $id ? "selected" : ""}}>{{$primer_nombre}}</option>
              @endforeach
          </select>
        </div>

      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Presupuesto</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="presupuesto" class="control-label requerido">Presupuesto Estimado</label>
          <input type="number" name="presupuesto" id="presupuesto" class="form-control" value="{{old('presupuesto', $proyectos->presupuesto ?? '')}}" required/>
        </div>
        <div class="form-group">
          <label for="cantidad_gastada" class="control-label requerido">Total gastado</label>
          <input type="number" name="cantidad_gastada" id="cantidad_gastada" class="form-control" value="{{old('cantidad_gastada', $proyectos->cantidad_gastada ?? '')}}" required/>
        </div>
        <div class="form-group">
          <label for="duracion_del_proyecto" class="control-label requerido">Duracion estimado del proyecto</label>
          <input type="number" name="duracion_del_proyecto" id="duracion_del_proyecto" class="form-control" value="{{old('duracion_del_proyecto', $proyectos->duracion_del_proyecto ?? '')}}" required/>
        </div>
      </div>
    </div>
  </div>