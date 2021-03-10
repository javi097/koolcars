@extends('layouts.app')
@section('titulo')
KoolCars || Home
@endsection
@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-md fixed-top" id="navbar">
    <div class="navbar-translate" id="logoHome">
        <a href="{{route('home')}}">
            <img class="navbar-brand" src="{{asset('img/fotosWelcome/logo_letra.png')}}">
        </a>
    </div>
    <button class="navbar-toggler" id="textoNavbar" type="button" data-toggle="collapse"
        data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="textoNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('coches.index')}}" id="textoNavbar">Encuetra tu coche</a>
            </li>
        </ul>

        @if (Route::has('login'))
        <div>
            @auth

            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <b id="textoN">{{ Auth::user()->nombreUsuario }}</b>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @role('admin')
                <a href="{{route('admin.panel')}}" class="dropdown-item">Admin</a>
                <a href="{{route('admin.perfil')}}" class="dropdown-item">Mi perfil</a>
                @endrole
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            @endauth
        </div>
        @endif

    </div>
</nav>
<!-- Final del Navbar-->

{{-- Contenido --}}
<div id="wrap" class="d-none d-sm-none d-md-block ">

    <div id="mainU" class="container clear-top text-center">
        <div class="row">
            <div class="col-md-4 mb-5 rounded animate__animated animate__zoomIn" id="cardPerfil" fadeInLeft>
                <h1 id="titulo1">Mi Perfil</h1><br>


                <form name="editPerfil" method='POST' action="{{route('admin.update', Auth::user())}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card  p-3 mb-5  rounded" id="userCard">
                        <div class="wrap">
                            <img src="{{ asset(Auth::user()->fotoPerfil) }}" class="main-profile-img"><input type='file'
                                accept="image/*" id="subir" name="fotoPerfil" hidden><label id="editP" for="subir"><i
                                    id="botonI" class="fas fa-edit"></i></label>
                            <br><br>
                            <br>
                            <br>
                        </div>
                        <div class="col">Nombre:
                            <input type="text" class="form-control" value="{{Auth::user()->nombre}}"
                                placeholder="Nombre" name='nombre' required>
                        </div><br>
                        <div class="col">Nombre de Usuario:
                            <input type="text" class="form-control" value="{{Auth::user()->nombreUsuario}}"
                                placeholder="Nombre de Usuario" name='nombreUsuario' required>
                        </div><br>
                        <div class="col">Cambiar contraseña:
                            <a class="btn btn-dark " id="boton3" href="{{route('admin.mostrar',Auth::user())}}"
                                role="button">cambiar</a>
                        </div><br>
                        <div class="col">
                            <input type='submit' id="boton" value='Guardar Perfil' class='btn btn-dark mr-3'>
                            <a href={{route('admin.perfil')}} class='btn btn-dark' id="boton2">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<br>


{{-- Contenido para movil --}}
<div id="wrap" class="d-block d-sm-block d-md-none">

    <div  class="container clear-top text-center">
        <div class="row">
            <div class="col-md-4 mb-5 rounded animate__animated animate__zoomIn" id="cardPerfil" fadeInLeft>
                <h1 id="titulo1">Mi Perfil</h1><br>


                <form name="editPerfil" method='POST' action="{{route('admin.update', Auth::user())}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card  p-3 mb-5  rounded" id="userCard">
                        <div class="wrap">
                            <img src="{{ asset(Auth::user()->fotoPerfil) }}" class="main-profile-img"><input type='file'
                                accept="image/*" id="subir" name="fotoPerfil" hidden><label id="editP" for="subir"><i
                                    id="botonI" class="fas fa-edit"></i></label>
                            <br><br>
                            <br>
                            <br>
                        </div>
                        <div class="col">Nombre:
                            <input type="text" class="form-control" value="{{Auth::user()->nombre}}"
                                placeholder="Nombre" name='nombre' required>
                        </div><br>
                        <div class="col">Nombre de Usuario:
                            <input type="text" class="form-control" value="{{Auth::user()->nombreUsuario}}"
                                placeholder="Nombre de Usuario" name='nombreUsuario' required>
                        </div><br>
                        <div class="col">Cambiar contraseña:
                            <a class="btn btn-dark " id="boton3" href="{{route('admin.mostrar',Auth::user())}}"
                                role="button">cambiar</a>
                        </div><br>
                        <div class="col">
                            <input type='submit' id="boton" value='Guardar Perfil' class='btn btn-dark mr-3'>
                            <a href={{route('admin.perfil')}} class='btn btn-dark' id="boton2">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<br>

{{-- Final del Contenido --}}
{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

            </script> KoolCars, All rights reserved
        </div>
    </div>
    <div class="push"></div>
</footer>
{{-- Final del Footer --}}
@endsection
