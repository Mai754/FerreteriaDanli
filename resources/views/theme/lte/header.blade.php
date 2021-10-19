<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    </ul>

    <ul class="navbar-nav ml-4">
      <li class="nav-item dropdown">
        <a href="" class="d-block" data-toggle="dropdown" aria-expanded="true">
          <img src="{{asset("assets/$theme/dist/img/avatar5.png")}}" class="img-circle" style="width: 35px;" style="height: 35px;" alt="User Image">
        </a>
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="card card-widget widget-user shadow">
            <div class="widget-user-header bg-success">
              <h3 class="widget-user-desc">{{session()->get('nombre_usuario') ?? 'Invitado'}}</h3>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="{{asset("assets/$theme/dist/img/avatar5.png")}}" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="row">
                @if (session()->get("roles") && count(session()->get("roles")) > 1)
                  <div class="col-md-12">
                    <div class="description-block">
                      <a href="#" class="cambiar-rol btn btn-block btn-outline-success btn-sm">CAMBIAR ROL</a>
                    </div>
                  </div>
                @endif
              </div>
            </div>

            <div class="row p-4">
              <div class="col-sm-6">
                <a href="{{route('logout')}}" class="btn btn-block btn-outline-success btn-sm">Salir</a>
              </div>
              <div class="col-sm-6">
                <a href="{{route('login')}}" class="btn btn-block btn-outline-success btn-sm">Ingresar</a>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>

  </nav>