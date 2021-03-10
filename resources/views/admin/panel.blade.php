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
<div id="wrap" class="d-none d-sm-none d-md-block">
    <div class="text-center mb-5">
        <h1 id="titulo1">Panel del Administrador</h1><br>

        <h4 class="text-center">Bienvenido al panel de administrador: <span class="font-weight-bold"
                id="textoPerfil1">{{Auth::user()->nombreUsuario}} </span> </h4>
    </div>
    <div id="main" class="container clear-top text-center w-50 mx-auto">
        <div class="col-md-4 mb-5 rounded animate__animated animate__zoomIn" id="cardPerfil" fadeInLeft>

            <div class="card  p-3 mb-5  rounded" id="userCard1">
                <div class="text-center mb-5">
                    <img src="{{ asset(Auth::user()->fotoPerfil) }}" class="rounded-circle border-0" id="fotoPerfil" />
                </div>
                <span class="font-weight-bold" id="textoPerfil">{{Auth::user()->nombre}}</span><br><br>

                <h3 id="textoPerfil2">Edita, crea o elimina</h3>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" id="textoL" href="{{ route('admin.users') }}">
                                        <i class="far fa-user"></i> Usuarios
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" id="textoL1" href="{{ route('admin.coches') }}">
                                        <i class="fas fa-car"></i> Coches
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" id="textoL2" href="{{ route('admin.marcas') }}">
                                        <i class="fas fa-image"></i> Marcas
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Contenido para moviles --}}
<div class="d-block d-sm-block d-md-none">
    <div class="text-center mb-5">
        <h1 id="titulo1">Panel del Administrador</h1><br>

        <h4 class="text-center">Bienvenido al panel de administrador: <span class="font-weight-bold"
                id="textoPerfil1">{{Auth::user()->nombreUsuario}} </span> </h4>
    </div>
    <div class="container text-center">
        <div class="col-md-4 mb-5 rounded animate__animated animate__zoomIn" id="cardPerfil" fadeInLeft>

            <div class="card  p-3 mb-5  rounded" id="userCard1">
                <div class="text-center mb-5">
                    <img src="{{ asset(Auth::user()->fotoPerfil) }}" class="rounded-circle border-0" id="fotoPerfil" />
                </div>
                <span class="font-weight-bold" id="textoPerfil">{{Auth::user()->nombre}}</span><br><br>

                <h3 id="textoPerfil2">Edita, crea o elimina</h3>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" id="textoL" href="{{ route('admin.users') }}">
                                        <i class="far fa-user"></i> Usuarios
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" id="textoL1" href="{{ route('admin.coches') }}">
                                        <i class="fas fa-car"></i> Coches
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark" id="textoL2" href="{{ route('admin.marcas') }}">
                                        <i class="fas fa-image"></i> Marcas
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
