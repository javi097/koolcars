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
<div id="wrap">
    <div class="text-center mb-5">
        <h1 class="text-center" id="titulo1">Coches Vintage</h1>
    </div>
    <div id="main" class="container clear-top text-center mx-auto">
        <div class="col-md-6 col-lg-4 col-xl-12">
            <img class="d-block w-100" src="{{asset('img/fotosVintage/citroen_1963.jpg')}}"
            style="border-radius: 10px; " ><br><h4 id="titulo3">Citroën 2CV – 1936</h4><br>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-12">
            <p id="textoV">Este clásico francés, que debe su nombre a los dos cilindros opuestos que le permiten moverse, 
                fue todo un éxito de ventas. Cuando a mediados de los años 50 se comercializó su versión furgoneta, 
                volvió a repetir dicha hazaña. Podemos destacar de él que es uno de los coches antiguos más valorados 
                pero más baratos que puedes encontrar.
            </p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-12">
            <img class="d-block w-100" src="{{asset('img/fotosVintage/volkswagen_1938.jpg')}}"
            style="border-radius: 10px; " ><br><h4 id="titulo3">Volkswagen Escarabajo – 1938</h4><br>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-12">
            <p id="textoV">Este modelo tan icónico de Volkswagen marcó, sin lugar a dudas, un antes y un después en la historia 
                del automóvil gracias, en gran parte, a la originalidad de su diseño que no le permitió pasar desapercibido. Además, 
                a todas sus versiones posteriores tampoco les ha costado hacerse un hueco en el mercado.
            </p>
        </div><br>
        <br>
        <br>
        <div class="col-md-6 col-lg-4 col-xl-12">
            <img class="d-block w-100" src="{{asset('img/fotosVintage/porsche_1964.jpg')}}"
            style="border-radius: 10px; "><br><h4 id="titulo3">Porsche 911 – 1964</h4><br>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-12">
            <p id="textoV">Hace algunos años, aún podríamos haberlo intentado, pero hoy en día es imposible encontrar un 911 cuyo precio 
                sea más o menos asequible. Además, los primeros refrigerados por agua llegan, incluso, a situar su precio por encima del 
                de las versiones más modernas.
            </p>
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
