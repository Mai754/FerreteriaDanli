<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Ferreteria Danli | Login</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        <link rel="stylesheet" href="{{asset("assets/seguridad/login.css")}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="cover">
                <div class="front">
                    <img src="{{asset("assets/$theme/dist/img/login.jpg")}}" alt="">
                    <div class="text">
                    <span class="text-1">Cada nuevo amigo es una <br> nueva aventura</span>
                    <span class="text-2">Vamos a conectarnos</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Bienvenido(a)</div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible"  data-auto-dismiss="2000">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <div class="alert-text">
                                    @foreach ($errors->all() as $error)
                                        <span class="text-center">{{$error}}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <form action="{{route('login-post')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" id="username" name="usuario"  value="{{old('usuario')}}" placeholder="Usuario" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" id="password" placeholder="Contraseña" required>
                                </div>
                                <div class="button input-box">
                                    <button type="submit" value="Log In">Acceder</button>
                                </div>
                                <div class="text sign-up-text">
                                    Gracias por recomendarnos.
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
