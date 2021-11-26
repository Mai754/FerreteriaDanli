@extends("theme.$theme.layout")

@section("titulo")
    Permiso - Rol
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/permiso-rol/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="content-header">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Instrucciones:</h5>
                * Permiso Rol es destinado para un usuario con rol Administrador. Verifica en la columna el rol que desea asignarle un permiso.
                <br>
                * En las filas se muestran los permisos que se encuentran en el sistema.
                <br>
                * Verifique bien el rol y el permiso que quiere asignar, luego chequea y automaticamente se guardara.
            </div>
            <div class="card card-info">
                <div class="card-header with-border">
                    <h3 class="card-title">Permiso - Rol</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Permiso</th>
                                @foreach ($rols as $id => $nombre)
                                <th class="text-center">{{$nombre}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $key => $permiso)
                                <tr>
                                    <td>{{$permiso["nombre"]}}</td>
                                    @foreach ($rols as $id => $nombre)
                                        <td class="text-center">
                                            <input
                                            type="checkbox"
                                            class="permiso_rol"
                                            name="permiso_rol[]"
                                            data-permisoid={{$permiso["id"]}}
                                            value="{{$id}}" {{in_array($id, array_column($permisosRols[$permiso["id"]], "id"))? "checked" : ""}}>
                                        </td>
                                    @endforeach
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection