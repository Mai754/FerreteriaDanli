<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo', 'Saymave') | Ferreteria Danli</title>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("assets/$theme/css/bootstrap.css")}}">
        
        <link rel="stylesheet" href="{{asset("assets/$theme/vendors/iconly/bold.css")}}">

        <link rel="stylesheet" href="{{asset("assets/$theme/vendors/perfect-scrollbar/perfect-scrollbar.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/vendors/bootstrap-icons/bootstrap-icons.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/css/app.css")}}">
        <link rel="shortcut icon" href="{{asset("assets/$theme/images/favicon.svg")}}" type="image/x-icon">
    </head>
    <body>
        <div id="app">
            <!-- Inicio Aside -->
            <div id="sidebar" class="active">
                @include("theme/$theme/aside")
            </div>
            <!-- Fin Aside -->
            <div class="page-content">
                <section class="row">
                    @yield('contenido')
                </section>
            </div>
            <!-- Inicio Footer -->
            @include("theme/$theme/footer")
            <!-- Fin Footer -->
        </div>

        <script src="{{asset("assets/$theme/vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/$theme/vendors/apexcharts/apexcharts.js")}}"></script>
        <script src="{{asset("assets/$theme/js/pages/dashboard.js")}}"></script>
        <script src="{{asset("assets/$theme/js/main.js")}}"></script>
    </body>
</html>