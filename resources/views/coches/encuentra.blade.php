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
<div id="wrap">

    <div id="main" class="container clear-top text-center w-50 mx-auto">
        <h2 id="titulo">ENCUENTRA TU COCHE IDEAL</h2><br>
        <form class="form ml-auto" method="GET" action="{{ route('coches.buscador') }}" id="form">
            <div class="input-group">
                @if ($request->modelo)
                    <input type="text" class="form-control" placeholder="Introduce el modelo del coche..." name="modelo" value = "{{$request->modelo}}"required>
                @else 
                    <input type="text" class="form-control" placeholder="Introduce el modelo del coche..." name="modelo" required>
                @endif
            </div>
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
                
                <div class="col">
                    <select name="carroceria_id" class="form-control">
                        <option>Seleccione la carroceria</option>
                        <option disabled>----------------</option>
                        @foreach ($carrocerias as $carroceria)
                        <option value="{{$carroceria->id}}">{{$carroceria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row justify-content-center mt-3 mr-4">
                <div class="text-center">
                    <input type="submit" class="btn btn-dark ml-5" value="Buscar">
                </div>
            </div>
    </form>
    <br><br>

    @if ($request->modelo)
    <p class="text-center">Resultados de la búsqueda <b><em>{{ $request->modelo }}</em></b></p>
    @endif
    @forelse ($coches as $coche)

    <div class="card mb-3 text-left shadow p-3 mb-5 bg-white rounded animate__animated animate__zoomIn "
        style="max-width: 840px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="#">
                    <img src="{{ asset($coche->foto) }}" id="car">
                </a>
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <div class="row">
                        <h5 class="card-title">
                            <b>{{$coche->modelo}}</b>
                        </h5>
                    </div>
                    <div class="row mb-3">
                        <h5 class="card-text float-right font-bold">Desde: <span
                                class="font-weight-bold">{{$coche->precio}}€</span></h5>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                <span class="font-weight-bold">Combustible: </span>{{$coche->combustible}}
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <span class="font-weight-bold">Caja de cambios: </span>
                                {{$coche->cambio}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                <span class="font-weight-bold">Nº de plazas: </span>
                                {{$coche->plazas}}
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <span class="font-weight-bold">Potencia máxima: </span>
                                {{$coche->potencia}}CV
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <h3 class="text-center mb-5">No hay coches con el modelo <b><em>{{ $request->modelo }}</em></b></h3>
    <br><br>
    @endforelse
    {!! $coches->appends(Request::only(['modelo','marca_id','carroceria_id']))->render() !!}
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