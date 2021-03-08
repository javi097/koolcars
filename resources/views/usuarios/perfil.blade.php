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
                {{ Auth::user()->nombreUsuario }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @role('admin')
                <a href="{{route('admin.panel')}}" class="dropdown-item">Admin</a>
                @endrole
                @if (Auth::user()->email == "svjaviergarcia@gmail.com")
                    <a href="{{route('admin.perfil')}}" class="dropdown-item">Mi perfil</a>
                @else
                    <a href="{{route('users.index')}}" class="dropdown-item">Mi perfil</a>
                @endif
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
<div id="wrap">
    
    <div id="mainU" class="container clear-top text-center">
        <div class="row">
            <div class="col-md-4 mb-5 rounded animate__animated animate__zoomIn" id="cardPerfil" fadeInLeft>
                <h1 id="titulo">Mi Perfil</h1><br>
                <div class="card  p-3 mb-5  rounded" id="userCard">
                    <img src="{{ asset(Auth::user()->fotoPerfil) }}" class="border-0" width="286" height="286"><br> 
                    <h3><b>{{Auth::user()->nombre}}</b></h3>
                    <p>{{Auth::user()->nombreUsuario}}</p><br>
                    <a class="btn btn-dark " id="boton2" href="{{route('coches.fav')}}" role="button">Favoritos</a><br>
                    <a class="btn btn-dark " id="boton" href="{{route('users.edit',Auth::user())}}" role="button">Editar Perfil</a>
                </div>
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
