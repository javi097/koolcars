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
<div id="wrap" class="col-xl-12 col-md-12 col-lg-4 ">
    <div class="text-center mb-5">
        <h1 class="text-center" id="titulo1">Compactos</h1>
    </div>
    <form class="form ml-auto text-center" method="GET" action="{{ route('coches.compa') }}" id="form1">
        <div class="form-row mt-3">
            <div class="col">
                <select name="marca_id" class="form-control">
                    <option>Seleccione la marca</option>
                    <option disabled>----------------</option>
                    @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row justify-content-center" id="botonBu">
            <div class="text-center">
                <input type="submit" class="btn btn-dark " id="boton"value="Buscar">
            </div>
        </div>
    </form>
    <div id="main" class="container clear-top text-center w-50 mx-auto d-none d-sm-none d-md-block">
        @forelse ($coches as $coch)
        
                <div class="card mb-3 text-left shadow p-3 mb-5 bg-white rounded animate__animated animate__zoomIn col-sm-9 col-lg-12 col-xl-12">
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
                        <div class="col-md-8 col-sm-3">
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
            @empty
            <h3 class="text-center mb-5">No hay compactos de la marca seleccionada</h3>
            <br><br>
    @endforelse
</div>
{{-- Para moviles --}}
<div class="container text-center d-block d-sm-block d-md-none" >
    @forelse ($coches as $coch)
    
            <div class="card mb-3 text-left shadow p-3 mb-5 bg-white rounded animate__animated animate__zoomIn">
                <div class="text-center" >
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
                    <div class="col-md-8 col-sm-3">
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
        @empty
        <h3 class="text-center mb-5">No hay compactos de la marca seleccionada</h3>
        <br><br>
@endforelse
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
