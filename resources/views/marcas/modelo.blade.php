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
    <div class="text-center mb-5">
        <img src="{{asset($marca->logo)}}" alt="">
        <h4 class="text-center">Fichas técnicas, fotos y precios de <span
                class="font-weight-bold text-primary">{{$marca->nombre}} </span> por modelo</h4>
    </div>
    <div id="main" class="container clear-top text-center w-50 mx-auto">
        @foreach ($coches as $coch)
        
                <div class="card mb-3 text-left shadow p-3 mb-5 bg-white rounded animate__animated animate__zoomIn " style="max-width: 840px;">
                    <div class="text-center" id="fav1">
                        @if ($coch->isFavorited())
                        <form action="{{ route('coches.destroyFav', $coch) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-html="true" title="<em>Coche guardado como favorito</em>" onclick="return confirm('¿Deseas borrar el coche de tus favoritos?')">
                                <i class="far fa-thumbs-up"></i>
                            </button>
                        </form>
                        @else
                        <form action="{{ route('users.fav', $coch) }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-info btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-html="true" title="<em>Guardar coche como favorito</em>" onclick="return confirm('¿Deseas guardar el coche como favorito?')">
                                <i class="far fa-thumbs-up"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="#">
                                <img src="{{ asset($coch->foto) }}" id="car">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="row">
                                    <h5 class="card-title">
                                        <b>{{$coch->modelo}}</b>
                                    </h5>
                                </div>
                                <div class="row mb-3">
                                    <h5 class="card-text float-right font-bold">Desde: <span class="font-weight-bold">{{$coch->precio}}€</span></h5>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            <span class="font-weight-bold">Combustible: </span>{{$coch->combustible}}
                                        </p>
                                    </div>
                                    <div class="col">
                                    <p>
                                        <span class="font-weight-bold">Caja de cambios: </span>
                                        {{$coch->cambio}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            <span class="font-weight-bold">Nº de plazas: </span>
                                            {{$coch->plazas}}
                                        </p>
                                    </div>
                                    <div class="col">
                                    <p>
                                        <span class="font-weight-bold">Potencia máxima: </span>
                                        {{$coch->potencia}}CV
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
</div>
</div>

{{-- Para móviles --}}
<div id="wrap" class="d-block d-sm-block d-md-none">
    <div class="text-center mb-5">
        <img src="{{asset($marca->logo)}}" alt="">
        <h4 class="text-center">Fichas técnicas, fotos y precios de <span
                class="font-weight-bold text-primary">{{$marca->nombre}} </span> por modelo</h4>
    </div>
    <div class="container clear-top text-center">
        @foreach ($coches as $coch)
                <div class="card mb-3 text-left shadow p-3 mb-5 bg-white rounded animate__animated animate__zoomIn " style="max-width: 840px;">
                    <div class="text-center">
                        @if ($coch->isFavorited())
                        <form action="{{ route('coches.destroyFav', $coch) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-html="true" title="<em>Coche guardado como favorito</em>" onclick="return confirm('¿Deseas borrar el coche de tus favoritos?')">
                                <i class="far fa-thumbs-up"></i>
                            </button>
                        </form>
                        @else
                        <form action="{{ route('users.fav', $coch) }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-info btn-fab btn-fab-mini btn-round" data-toggle="tooltip" data-html="true" title="<em>Guardar coche como favorito</em>" onclick="return confirm('¿Deseas guardar el coche como favorito?')">
                                <i class="far fa-thumbs-up"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="#">
                                <img src="{{ asset($coch->foto) }}" id="car">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <div class="row">
                                    <h5 class="card-title">
                                        <b>{{$coch->modelo}}</b>
                                    </h5>
                                </div>
                                <div class="row mb-3">
                                    <h5 class="card-text float-right font-bold">Desde: <span class="font-weight-bold">{{$coch->precio}}€</span></h5>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            <span class="font-weight-bold">Combustible: </span>{{$coch->combustible}}
                                        </p>
                                    </div>
                                    <div class="col">
                                    <p>
                                        <span class="font-weight-bold">Caja de cambios: </span>
                                        {{$coch->cambio}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            <span class="font-weight-bold">Nº de plazas: </span>
                                            {{$coch->plazas}}
                                        </p>
                                    </div>
                                    <div class="col">
                                    <p>
                                        <span class="font-weight-bold">Potencia máxima: </span>
                                        {{$coch->potencia}}CV
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
</div>
</div>

<div class="container text-center">{{ $coches->links() }}</div>
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
