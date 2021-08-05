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

    <script src="{{asset("assets/pages/scripts/evento/agenda.js")}}" type="text/javascript"></script>

    <script src="{{asset("assets/$theme/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("assets/calendar/lib/main.js")}}"></script>
@endsection
@section('contenido')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Calendario</h1>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="sticky-top mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lista de Eventos</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Descripción</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventos as $evento)
                                            <tr>
                                                <td>{{$evento->title}}</td>
                                                <td>{{$evento->descripcion}}</td>
                                                <td>{!! \Carbon\Carbon::parse($evento->start)->format('Y-m-d') !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card card-primary">
                        <div class="card-body p-0">
                            <div id="agenda"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="modelTitleId" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Evento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        {!! csrf_field() !!}
                        <div class="form-group d-none">
                            <label for="id">Id</label>
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                        </div>
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title" autocomplete="off" id="title" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" cols="3" rows="3"></textarea>
                        </div>
                        <div class="form-group d-none">
                            <label for="start">start</label>
                            <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId">
                        </div>
                        <div class="form-group d-none">
                            <label for="end">end</label>
                            <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection