<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset("assets/$theme/dist/img/ferreicono.png")}}" type="image/gif"/>
        <title>@yield('titulo', 'Saymave') | Ferreteria Danli</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.css")}}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        @yield('styles')
        <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    </head>
    <body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Inicicio Header -->
            @include("theme/$theme/header")
            <!-- Fin Header -->
            <!-- Inicio Aside -->
            @include("theme/$theme/aside")
            <!-- Fin Aside -->
            <div class="content-wrapper">
                <section class="content">
                    @yield('contenido')
                </section>
            </div>
            <!-- Inicio Footer -->
            @include("theme/$theme/footer")
            <!-- Fin Footer -->

            @if (session()->get("roles") && count(session()->get("roles")) > 1)
                @csrf
                <div class="modal fade" id="modal-seleccionar-rol" data-rol-set="{{empty(session()->get("rol_id")) ? 'NO' : 'SI'}}" tabindex="-1" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Roles de Usuario</h4>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">Cuentas con mas de un rol en la plataforma, a continuacion seleccione con cual de ellos desea trabajar</p>
                                @foreach (session()->get("roles") as $key => $rol)
                                    <div class="description-block">
                                        <a href="#" class="asignar-rol btn btn-block btn-outline-info btn-sm" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                                            {{$rol["nombre"]}}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        <!-- jQuery -->
        <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        @yield('scriptsPlugins')
        <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js"></script>

        <script src="{{asset("assets/js/scripts.js")}}"></script>
        <script src="{{asset("assets/js/funciones.js")}}"></script>
        <script type="text/javascript">
            var baseUrl = {!! json_encode(url('/')) !!}
        </script>
        @yield('scripts')
    </body>
</html>