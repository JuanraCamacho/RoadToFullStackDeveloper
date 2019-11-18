<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Road To Full Stack Developer</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        {{-- <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/> --}}
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css') }}">
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                {{-- <div>
                        <strong>Road To Full Stack Developer</strong>
                </div> --}}
                <div class="login-logo"><strong>Road To Full Stack Developer</strong></div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido</strong>, Inicia Sesión</div>                    
                    <form action="index.html" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Usuario"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Contraseña"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Olvidaste tu contraseña?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Entrar</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 RTFSD
                    </div>
                    <div class="pull-right">
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                            @endif
                        {{-- <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a> --}}
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






