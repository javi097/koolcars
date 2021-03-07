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

        <form name="crearCoche" method='POST' action="{{route('admin.coches.store')}}" enctype="multipart/form-data">
            @csrf
                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Modelo" name='modelo' required>
                        </div>
                        
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" name='nombre' required>
                          </div>
                    </div>

                    <div class="form-row mt-3">
                    

                    <div class="col ml-3"><b>Marca:</b>&nbsp;
                        <select name="marca_id" class="form-control">
                            @foreach ($marcas as $marca)
                                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col ml-3"><b>Carroceria:</b>&nbsp;
                        <select name="carroceria_id" class="form-control">
                            @foreach ($carrocerias as $carroceria)
                                <option value="{{$carroceria->id}}">{{$carroceria->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col ml-3"><b>Combustible:</b>&nbsp;
                        <select name="combustible" class="form-control">
                            <option selected>Gasolina</option>
                            <option>Diesel</option>
                        </select>
                    </div>

                    <div class="col ml-3"><b>Cambio:</b>&nbsp;
                        <select name="cambio" class="form-control">
                            <option selected>Manual</option>
                            <option>Automatico</option>
                        </select>
                    </div>

                    <div class="col ml-3"><b>Potencia:</b>&nbsp;
                        <input type="text" class="form-control" placeholder="Potencia" name='potencia' required>
                    </div>

                    <div class="col ml-3"><b>Precio:</b>&nbsp;
                        <input type="text" class="form-control" placeholder="Precio" name='precio' required>
                    </div>

                    <div class="col ml-3"><b>Plazas:</b>&nbsp;
                        <select name="plazas" class="form-control">
                            <option selected>5</option>
                            <option>4</option>
                            <option>2</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                    </div>
               
                <div class="form-group">
                  <div class="col mt-4">
                      <b>Imagen:</b>&nbsp;<input type='file' name='foto' accept="image/*">
        
                  </div>
                </div>
                <div class="form-row mt-3">
                  <div class="col">
                      <input type='submit' value='Guardar' class='btn btn-success mr-3'>
                      <input type='reset' value='Limpiar' class='btn btn-warning mr-3'>
                      <a href={{route('admin.coches')}} class='btn btn-info'>Volver</a>
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
