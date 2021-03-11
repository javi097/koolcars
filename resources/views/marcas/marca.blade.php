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
    <button style="border:2px solid #ccff33" class="navbar-toggler navbar-toggler-right" 
    type="button" data-toggle="collapse" 
    data-target="#textoNavbar" 
    aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="Toggle navigation"> 
    <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:#ccff33;font-size:28px;"></i></span> 
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
<div id="wrap" class="d-none d-sm-none d-md-block">
    <div id="main" class="container clear-top text-center w-50 mx-auto">
        <div class="row">
            @foreach ($marcas as $marca)
            <div class="col-md-4 mb-5 animate__animated animate__fadeInLeft" fadeInLeft>
                <div class="card shadow p-3 mb-5 bg-white rounded" id="marcaCard">
                    <a href="{{route('marcas.show', $marca)}}">
                        <img src="{{ asset($marca->logo) }}" alt=""  width="146" height="89">
                    </a>
                    <p>{{$marca->nombre}}</p>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    {{-- Footer --}}
</div>

{{-- Para móviles --}}
<div id="wrap" class=" d-block d-sm-block d-md-none">
    <div class="container clear-top text-center w-50 mx-auto my-auto">
        <div class="row">
            @foreach ($marcas as $marca)
            <div class="col-md-4 mb-5 animate__animated animate__fadeInLeft" fadeInLeft>
                <div class="card shadow p-3 mb-5 bg-white rounded" id="marcaCard">
                    <a href="{{route('marcas.show', $marca)}}">
                        <img src="{{ asset($marca->logo) }}" alt=""  width="146" height="89">
                    </a>
                    <p>{{$marca->nombre}}</p>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    {{-- Footer --}}
</div>

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
{{-- Final del Contenido --}}
@endsection
