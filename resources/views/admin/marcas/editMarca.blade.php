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
    <div id="main" class="container clear-top text-center ">
        <form name="editMarca" method='POST' action="{{route('admin.marcas.update', $marca)}}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row mt-3">
                <div class="col mt-2">
                    <input type="text" class="form-control" value="{{$marca->nombre}}" placeholder="Nombre"
                        name='nombre' required>
                </div>

                <div class="form-group">
                    <div class="col mt-1">
                        <img src="{{asset($marca->logo)}}" width="80px" height="50px" class="rounded-circle mr-1 mb-2">
                        &nbsp;<input type='file' name='logo' id="subirL" accept="image/*" hidden><label for="subirL"
                            id="editM">Seleccione imagen</label>
                    </div>
                </div>
                <div class="form-row mt-1">
                    <div class="col ml-5">
                        <input type='submit' value='Guardar' id="boton" class='btn btn-dark mr-3'>
                        <a href={{route('admin.marcas')}} id="boton2" class='btn btn-dark'>Volver</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


{{-- Contenido para movil--}}
<div id="wrap" class="d-block d-sm-block d-md-none">
    <div class="container clear-top text-center ">
        <form name="editMarca" method='POST' action="{{route('admin.marcas.update', $marca)}}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row mt-3">
                <div class="col mt-2">
                    <input type="text" class="form-control" value="{{$marca->nombre}}" placeholder="Nombre"
                        name='nombre' required>
                </div>

                <div class="form-group">
                    <div class="col mt-1">
                        <img src="{{asset($marca->logo)}}" width="80px" height="50px" class="rounded-circle mr-1 mb-2">
                        &nbsp;<input type='file' name='logo' id="subirL" accept="image/*" hidden><label for="subirL"
                            id="editM">Seleccione imagen</label>
                    </div>
                </div>
                <div class="form-row mt-1">
                    <div class="col ml-5">
                        <input type='submit' value='Guardar' id="boton" class='btn btn-dark mr-3'>
                        <a href={{route('admin.marcas')}} id="boton2" class='btn btn-dark'>Volver</a>
                    </div>
                </div>
            </div>
        </form>
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
