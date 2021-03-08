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
    <div id="mainC" class="container clear-top text-center">
        <a href="{{ route('admin.coches.create') }}" class="btn btn-dark fas fa-plus-square" id="crear1"><b>Crear</b></a>
        <table id="tabla2">
            <tr id="tr1">    
                <th scope="col" class="align-middle" id="td2">Imagen</th>
                <th scope="col" class="align-middle" id="td2">Nombre</th>
                <th scope="col" class="align-middle" id="td2">Potencia</th>
                <th scope="col" class="align-middle" id="td2">Precio</th>
                <th scope="col" class="align-middle" id="td2">Editar</th>
                <th scope="col" class="align-middle" id="td2">Borrar</th>
            </tr>
            <tbody>
                @foreach ($coches as $coch)
                    <tr id="tr1">
                        <td id="td1">
                            <img src="{{asset($coch->foto)}}" class="rounded-circle" id="fotoMarca">
                        </td>
                        <td id="td1">{{$coch->nombre}}</td>
                        <td id="td1">{{$coch->potencia}} CV</td>
                        <td id="td1">{{$coch->precio}} €</td>
                        <td><a href="{{ route('admin.coches.edit',$coch) }}" class="btn btn-dark far fa-edit"></a></td>
                        <td>
                            <form name="borrarCoche" method='post' action="{{route('admin.coches.destroy', $coch)}}">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-dark far fa-trash-alt" onclick="return confirm('¿Desea borrar este coche?')"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>
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
