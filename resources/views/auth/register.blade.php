@extends('plantilla.plantilla')
@section('titulo')
KoolCars
@endsection
@section('contenido')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
            <a href="{{route('welcome')}}">
                <img class="navbar-brand" src="{{asset('img/fotosWelcome/logo_letra.png')}}">
                </a>
        </div>

    </div>
</nav>
<!-- End Navbar -->
<div class="page-header clear-filter d-none d-sm-none d-md-block" filter-color=" #1a1a1a">
    <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="{{ route('register') }}" id="formRegister">
                        @csrf
                        <div class="card-header text-center">
                            <div class="logo-container">
                                <img src="{{asset('img/fotoPerfil/logo_coche.png')}}" width="220pxpx" height="100px">
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- Nombre --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </span>
                                </div>
                                <input id="nombre" placeholder="*Nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgNombre"></span>      
                            </div>
                            {{-- Nombre de Usuario --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input id="nombreUsuario" placeholder="*Nombre de Usuario"type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombreUsuario') }}" required autocomplete="nombreUsuario">
                                @error('nombreUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgNickname"></span>      
                            </div>
                            {{-- Email --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons ui-1_email-85"></i>
                                    </span>
                                </div>
                                <input id="email" placeholder="*Email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgEmail"></span>      
                            </div>
                            {{-- Contraseña --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons objects_key-25"></i>
                                    </span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="*Contraseña">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgPassword"></span>                                
                            </div>
                            {{-- Confirmar Contraseña --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons objects_key-25"></i>
                                    </span>
                                </div>
                                <input id="password-confirm" placeholder="*Repetir Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                              <a href="javascript:iniciarTodo();" type="submit" style="color:black"class="btn btn-warning btn-round btn-lg btn-block">Crear Cuenta</a>
                            <div class="pull-center">
                                <a href="{{route('login')}}" class="link" style="color: white">Iniciar Sesión</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- Contenido para movil --}}
<div class="page-header clear-filter d-block d-sm-block d-md-none mt-5" filter-color=" #1a1a1a">
    <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="{{ route('register') }}" id="formRegister">
                        @csrf
                        <div class="card-header text-center">
                            <div class="logo-container">
                                <img src="{{asset('img/fotoPerfil/logo_coche.png')}}" width="220pxpx" height="100px">
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- Nombre --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </span>
                                </div>
                                <input id="nombre" placeholder="*Nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgNombre"></span>      
                            </div>
                            {{-- Nombre de Usuario --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input id="nombreUsuario" placeholder="*Nombre de Usuario"type="text" class="form-control @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombreUsuario') }}" required autocomplete="nombreUsuario">
                                @error('nombreUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgNickname"></span>      
                            </div>
                            {{-- Email --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons ui-1_email-85"></i>
                                    </span>
                                </div>
                                <input id="email" placeholder="*Email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgEmail"></span>      
                            </div>
                            {{-- Contraseña --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons objects_key-25"></i>
                                    </span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="*Contraseña">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <span class="invalid-feedback text-center" role="alert" id="msgPassword"></span>                                
                            </div>
                            {{-- Confirmar Contraseña --}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons objects_key-25"></i>
                                    </span>
                                </div>
                                <input id="password-confirm" placeholder="*Repetir Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <input type="submit" value="Crear Cuenta" style="color: black" class="btn btn-warning btn-round btn-lg btn-block">
                              {{-- <a href="javascript:iniciarTodo();" type="submit" style="color:black"class="btn btn-warning btn-round btn-lg btn-block">Crear Cuenta</a> --}}
                            <div class="pull-center">
                                <a href="{{route('login')}}" class="link" style="color: white">Iniciar Sesión</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-default" style="background-color: #1a1a1a">
    <div class=" container text-center">
        <div class="copyright" id="copyright" style="color:white;">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

            </script> KoolCars, All rights reserved
        </div>
    </div>
</footer>
</div>