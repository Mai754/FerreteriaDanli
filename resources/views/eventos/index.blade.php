@extends("theme.$theme.layout")

@section('titulo')
    Calendario
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset("assets/calendar/lib/main.css")}}">
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/evento/evento.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/$theme/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("assets/calendar/lib/main.js")}}"></script>
@endsection
@section('contenido')
    @include('includes.mensaje')
    
    @include('includes.form-error')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Calendario</h1>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body p-0">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade show" id="evento" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear Evento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start">Fecha inicial</label>
                            <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="end">Fecha final</label>
                            <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection