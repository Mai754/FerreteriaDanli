@extends("theme.$theme.layout")

@section("titulo")
    Menu - Rol
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/menu-rol/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="content-header">
        <div class="col-lg-12">
            @include('includes.mensaje')
            <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Instrucciones:</h5>
                * Menú Rol es destinado para un usuario con rol Administrador. Verifica en la columna el rol que desea asignarle un menú.
                <br>
                * En las filas se muestran los menús que se encuentran en el sistema.
                <br>
                * Verifique bien el rol y el menú que quiere asignar, luego chequea y automaticamente se guardara.
                <br>
                * Los menús se mostrarán de la manera que lo organizo en la pantalla de menú.
            </div>
            <div class="card card-info">
                <div class="card-header with-border">
                    <h3 class="card-title">Menú - Rol</h3>
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
                                <th>Menú</th>
                                @foreach ($rols as $id => $nombre)
                                    <th class="text-center">{{$nombre}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $key => $menu)
                            @if ($menu["menu_id"] != 0)
                                @break
                            @endif
                                <tr>
                                    <td class="font-weight-bold"><i class="fa fa-arrows-alt"></i> {{$menu["nombre"]}}</td>
                                    @foreach($rols as $id => $nombre)
                                        <td class="text-center">
                                            <input
                                            type="checkbox"
                                            class="menu_rol"
                                            name="menu_rol[]"
                                            data-menuid={{$menu[ "id"]}}
                                            value="{{$id}}" {{in_array($id, array_column($menusRols[$menu["id"]], "id"))? "checked" : ""}}>
                                        </td>
                                    @endforeach
                                </tr>
                                @foreach($menu["submenu"] as $key => $hijo)
                                    <tr>
                                        <td class="pl-30"><i class="fa fa-arrow-right"></i> {{ $hijo["nombre"] }}</td>
                                        @foreach($rols as $id => $nombre)
                                            <td class="text-center">
                                                <input
                                                type="checkbox"
                                                class="menu_rol"
                                                name="menu_rol[]"
                                                data-menuid={{$hijo[ "id"]}}
                                                value="{{$id}}" {{in_array($id, array_column($menusRols[$hijo["id"]], "id"))? "checked" : ""}}>
                                            </td>
                                        @endforeach
                                    </tr>
                                    @foreach ($hijo["submenu"] as $key => $hijo2)
                                        <tr>
                                            <td class="pl-60"><i class="fa fa-arrow-right"></i> {{$hijo2["nombre"]}}</td>
                                            @foreach($rols as $id => $nombre)
                                                <td class="text-center">
                                                    <input
                                                    type="checkbox"
                                                    class="menu_rol"
                                                    name="menu_rol[]"
                                                    data-menuid={{$hijo2[ "id"]}}
                                                    value="{{$id}}" {{in_array($id, array_column($menusRols[$hijo2["id"]], "id"))? "checked" : ""}}>
                                                </td>
                                            @endforeach
                                        </tr>
                                        @foreach ($hijo2["submenu"] as $key => $hijo3)
                                            <tr>
                                                <td class="pl-90"><i class="fa fa-arrow-right"></i> {{$hijo3["nombre"]}}</td>
                                                @foreach($rols as $id => $nombre)
                                                <td class="text-center">
                                                    <input
                                                    type="checkbox"
                                                    class="menu_rol"
                                                    name="menu_rol[]"
                                                    data-menuid={{$hijo3[ "id"]}}
                                                    value="{{$id}}" {{in_array($id, array_column($menusRols[$hijo3["id"]], "id"))? "checked" : ""}}>
                                                </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection