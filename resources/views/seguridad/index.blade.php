<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ferreteria Danli | Login</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("assets/login/fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("assets/login/css/owl.carousel.min.css")}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("assets/login/css/bootstrap.min.css")}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset("assets/login/css/style.css")}}">
  </head>
  <body>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset("assets/login/images/undraw_remotely_2j6y.svg")}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">

              <div class="col-md-8">
                <div class="mb-4">
                  <center><h3>Inicio de Secion</h3></center>
                  <center><p class="mb-4">Bienvenido(a) a Nuestra Ferreteria</p></center>
                </div>

                @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible"  data-auto-dismiss="2000">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <div class="alert-text">
                          @foreach ($errors->all() as $error)
                              <span>{{$error}}</span>
                          @endforeach
                      </div>
                  </div>
                @endif

                <form action="{{route('login-post')}}" method="post" autocomplete="off">
                  @csrf
                  <div class="form-group first">
                    <label for="username">Usuario</label>
                    <input type="text" name="usuario" value="{{old('usuario')}}" class="form-control" id="username">
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>
                  <button type="submit" value="Log In" class="btn btn-block btn-primary">Acceder</button>
                </form>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>

    <script src="{{asset("assets/login/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("assets/login/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/login/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/login/js/main.js")}}"></script>
  </body>
</html>