@extends('layouts.app')
@section('titulo')
KoolCars || Home
@endsection
@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-md fixed-top" id="navbar">
    <div class="navbar-translate" id="logoHome">
        <a href="{{route('welcome')}}">
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
    <div  class="container clear-top">
        <div class="container text-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="{{route('marcas.index')}}">
                            <img class="d-block w-100" src="{{asset('img/fotosCarousel/coches.jpg')}}" alt="First slide"
                                style="border-radius: 10px; ">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 id="textoProx">TU PRÓXIMO COCHE <span id="aqui">ESTÁ AQUÍ</span> </h1>
        <p id="textoVida">Un coche para cada estilo de vida</p>
        <br>
        <table id="tabla1" class="responsive">
           
            <tr>
                <td>
                    <img src="{{asset('img/fotosTipo/compacto.png')}}" class="rounded float-left" id="compacto">
                    <p id="tipoCoche">COMPACTOS</p>
                    <div class="text-center">
                        <a class="btn btn-secondary " id="boton1" href="#" role="button">VER TODOS</a>
                    </div>
                </td>

                <td>
                    <img src="{{asset('img/fotosTipo/coupe.png')}}" class="rounded float-left" id="coupe">
                    <p id="tipoCoche">CABRIOS Y COUPES</p>
                    <div class="text-center">
                        <a class="btn btn-secondary " id="boton1" href="#" role="button">VER TODOS</a>
                    </div>
                </td>

                <td>
                    <img src="{{asset('img/fotosTipo/4x4.png')}}" class="rounded float-left" id="suv">
                    <p id="tipoCoche">SUVS Y 4X4</p>
                    <div class="text-center">
                        <a class="btn btn-secondary " id="boton1" href="#" role="button">VER TODOS</a>
                    </div>
                </td>

                <td>
                    <img src="{{asset('img/fotosTipo/familiares.png')}}" class="rounded float-left" id="fam">
                    <p id="tipoCoche">FAMILIARES</p>
                    <div class="text-center">
                        <a class="btn btn-secondary " id="boton1" href="#" role="button">VER TODOS</a>
                    </div>
                </td>

                <td>
                    <img src="{{asset('img/fotosTipo/monovolumen.png')}}" class="rounded float-left" id="mono">
                    <p id="tipoCoche">MONOVOLÚMENES</p>
                    <div class="text-center">
                        <a class="btn btn-secondary " id="boton1" href="#" role="button">VER TODOS</a>
                    </div>
                </td>
            </tr>

        </table>

    </div>

</div>
<br><br><br><br>
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

{{-- Final del Contenido --}}
@endsection
