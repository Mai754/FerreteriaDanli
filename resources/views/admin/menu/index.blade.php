@extends("theme.$theme.layout")

@section("titulo")
    Menu
@endsection

@section("styles")
    <link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
    <script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="content-header">
        @include('includes.mensaje')
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Instrucciones:</h5>
            * Menús se muestra con opciones encajables, donde puede mover cada una de ellas y organizarlas como más le place.
            <br>
            * Se pueden organizar en submenús, puede encajar un menú dentro de otro.
            <br>
            * Al asignar un menú sobre otro, el menú padre pierde su enlace, y no podrá acceder al enlace que tenía ese menú. 
            <br> 
            * Para ese caso es necesario crear otro menú con una URL = #.
            <br>
            * Cada menú muestra una información previa de lo que contiene, también una visualización del icono.
            <br>
            * Al darle clic a cualquier menú este mostrara un formulario con su información, donde se puede editar la información ese menú.
            <br>
            * También puede eliminar ese menú, con el icono de basurero, que se muestra en la parte derecha de cada menú.
        </div>
        <div class="card card-info">
            <div class="card-header col-lg-12">
                <h3 class="card-title">Menús</h3>
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_menu')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div> 
            </div>
            <div class="card-body">
                @csrf
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item)
                            @if ($item["menu_id"] != 0)
                                @break
                            @endif
                            @include("admin.menu.menu-item",["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection