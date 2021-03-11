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
    
    <div id="mainU" class="container clear-top text-center">
        <table id="tabla3" class="responsive">
            <thead>
                <tr id="tr1">    
                    <th scope="col" class="align-middle" id="td2">Foto de Perfil</th>
                    <th scope="col" class="align-middle" id="td2">Nombre</th>
                    <th scope="col" class="align-middle" id="td2">Nombre de Usuario</th>
                    <th scope="col" class="align-middle" id="td2">Email</th>
                    <th scope="col" class="align-middle" id="td2">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $user)
                    <tr id="tr1">
                        <td id="tr1">
                            <img src="{{asset($user->fotoPerfil)}}" class="rounded-circle" id="fotoPerfil1">
                        </td>
                        <td id="tr1">{{$user->nombre}}</td>
                        <td id="tr1">{{$user->nombreUsuario}}</td>
                        <td id="tr1">{{$user->email}}</td>
                        <td id="tr1">
                            <form name="borrarUsu" method='post' action="{{route('admin.users.destroy', $user)}}">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-dark far fa-trash-alt" onclick="return confirm('¿Desea borrar este usuario?')"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="container text-center">{{ $usuarios->links() }}</div>

{{-- Contenido para moviles --}}
<div id="wrap" class="d-block d-sm-block d-md-none">
    
    <div class="container clear-top text-center">
        <table id="tabla3" class="responsive">
            <thead>
                <tr id="tr1">    
                    <th scope="col" class="align-middle" id="td2">Foto de Perfil</th>
                    <th scope="col" class="align-middle" id="td2">Nombre</th>
                    <th scope="col" class="align-middle" id="td2">Nombre de Usuario</th>
                    <th scope="col" class="align-middle" id="td2">Email</th>
                    <th scope="col" class="align-middle" id="td2">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $user)
                    <tr id="tr1">
                        <td id="tr1">
                            <img src="{{asset($user->fotoPerfil)}}" class="rounded-circle" id="fotoPerfil1">
                        </td>
                        <td id="tr1">{{$user->nombre}}</td>
                        <td id="tr1">{{$user->nombreUsuario}}</td>
                        <td id="tr1">{{$user->email}}</td>
                        <td id="tr1">
                            <form name="borrarUsu" method='post' action="{{route('admin.users.destroy', $user)}}">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-dark far fa-trash-alt" onclick="return confirm('¿Desea borrar este usuario?')"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="container text-center">{{ $usuarios->links() }}</div>

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
