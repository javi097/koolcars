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
                <a class="nav-link" href="#" id="textoNavbar">Encuetra tu coche</a>
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
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
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
        <img src="{{asset($marca->logo)}}" alt="">
        <h4 class="text-center">Fichas técnicas, fotos y precios de <span
                class="font-weight-bold text-primary">{{$marca->nombre}} </span> por modelo</h4>
    </div>
    <div id="main" class="container clear-top text-center w-50 mx-auto">


         @php
                     echo("<script>console.log('PHP: " . $marcaJson['id'] . "');</script>");
                 @endphp    

        @php
            $count = 0;
            $count1 = 0;
            $count2 = 0;
            $count3= 0;
            $count4= 0;
            $nombre = '';
        @endphp

        {{-- Búsqueda para los Compactos --}}
                @foreach ($compactoResult as $coche)
                    @foreach ($coche as $key => $value)
                        @php
                        if ($key == 'nombre') {
                            $nombre = $value;
                        }
                        // echo("<script>console.log('PHP: " . $nombre . "');</script>");
                        if($count == 1) break;

                         if (($key == 'carroceria_id' && $value == '1') ) {   
                            echo '
                                <h3>Compactos de '.$marca->nombre.'</h3>
                                <a href="'.route('carrocerias.coche', $marcaJson['id']).'">
                                    <img src="'.asset($coche['foto']).'" alt="">
                                </a>
                            ';
                                $count++;
                            }
                            @endphp
                            
                    @endforeach
                @endforeach
                            
        <br><br><br><br>
        
        
        {{-- Búsqueda para los Familiares --}}

        @foreach ($familiarResult as $coche)
                    @foreach ($coche as $key => $value)
                        @php
                        if($count1 == 1) break;
                        @endphp
                            @php if ($key == 'carroceria_id' && $value == '2'){
                               
                            echo '
                                <h3>Familiares de '.$marca->nombre.'</h3>
                                <a href="'.route('coches.show', $value).'">
                                    <img src="'.asset($coche['foto']).'" alt="">
                                </a>
                            ';
                                $count1++;
                            }
                            @endphp
                            
                    @endforeach
                @endforeach
        <br><br><br><br>

        {{-- Búsqueda para los Coupes --}}
       

        @foreach ($coupeResult as $coche)
                    @foreach ($coche as $key => $value)
                        @php
                        if($count2 == 1) break;
                        @endphp
                            @php if ($key == 'carroceria_id' && $value == '3'){
                               
                            echo '
                                <h3>Coupes de '.$marca->nombre.'</h3>
                                <a href="'.route('coches.show', $value).'">
                                    <img src="'.asset($coche['foto']).'" alt="">
                                </a>
                            ';
                                $count2++;
                            }
                            @endphp
                            
                    @endforeach
                @endforeach
        <br><br><br><br>

        {{-- Búsqueda para los Monovolúmenes --}}
      
        @foreach ($monovolumenResult as $coche)
                    @foreach ($coche as $key => $value)
                        @php
                        if($count3 == 1) break;
                        @endphp
                            @php if ($key == 'carroceria_id' && $value == '4'){
                               
                            echo '
                                <h3>Monovolúmenes de '.$marca->nombre.'</h3>
                                <a href="'.route('coches.show', $value).'">
                                    <img src="'.asset($coche['foto']).'" alt="">
                                </a>
                            ';
                                $count3++;
                            }
                            @endphp
                            
                    @endforeach
                @endforeach

        <br><br><br><br>
        {{-- Búsqueda para los SUVs --}}
        
        @foreach ($suvResult as $coche)
                    @foreach ($coche as $key => $value)
                        @php
                        if($count4 == 1) break;
                        @endphp
                            @php if ($key == 'carroceria_id' && $value == '5'){
                               
                            echo '
                                <h3>4X4 SUV de '.$marca->nombre.'</h3>
                                <a href="'.route('coches.show', $value).'">
                                    <img src="'.asset($coche['foto']).'" alt="">
                                </a>
                            ';
                                $count4++;
                            }
                            @endphp
                            
                    @endforeach
                @endforeach

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
