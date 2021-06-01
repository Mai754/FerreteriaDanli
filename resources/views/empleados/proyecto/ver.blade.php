@extends("theme.$theme.layout")

@section('titulo')
    Proyectos
@endsection
@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="content-header">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Proyecto</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <a href="{{route('proyecto')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver
                    </a>
                  </ol>
                </div>
              </div>
        </section>

        <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detalles de Proyecto</h3>
      
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Presupuesto Estimado</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$proyectos->presupuesto}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Total gastado</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$proyectos->cantidad_gastada}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted">Duracion estimado del proyecto</span>
                            <span class="info-box-number text-center text-muted mb-0">{{$proyectos->duracion_del_proyecto}}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i>{{$proyectos->nombre_del_proyecto}}</h3>
                    <p class="text-muted">{{$proyectos->descripcion}}</p>
                    <br>
                    <div class="text-muted">
                      <p class="text-sm">Cliente
                        @foreach ($clientes as $id => $nombre_cliente)
                            <b class="d-block">{{$nombre_cliente}}</b>
                        @endforeach
                      </p>
                      <p class="text-sm">Lider De Proyecto
                        @foreach ($empleados as $id => $primer_nombre)
                            <b class="d-block">{{$primer_nombre}}</b>
                        @endforeach
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
          </section>
    </div>
@endsection