@extends('plantilla.plantilla')
@section('titulo')
KoolCars
@endsection
@section('contenido')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg  fixed-top navbar-transparent " style="background: #1a1a1a" color-on-scroll="400">
    {{-- <nav class="navbar navbar-expand-lg bg-dark fixed-top" color-on-scroll="400"> --}}
    <div class="container">
        <div class="navbar-translate">
            <a href="{{route('welcome')}}">
                <img class="navbar-brand" src="{{asset('img/fotosWelcome/logo_letra.png')}}">
            </a>
          
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button"
        data-toggle="collapse" data-target="#navigation" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="now-ui-icons design_bullet-list-67" style="color:#ccff33"></i></i></span>
    </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth

                <button class="btn btn-round" type="button" disabled
                    style=" text-shadow: 2px 0 0 yellow, -2px 0 0 yellow, 0 2px 0 yellow, 0 -2px 0 yellow, 1px 1px yellow, -1px -1px 0 yellow, 1px -1px 0 yellow, -1px 1px 0 yellow; background:#2c2c2c"><a
                        href="{{ url('/home') }}" class="text-sm underline"
                        style="text-decoration: none; color:black;">Home</a></button>
                @else
                <button class="btn btn-round" type="button" disabled
                    style=" text-shadow: 2px 0 0 yellow, -2px 0 0 yellow, 0 2px 0 yellow, 0 -2px 0 yellow, 1px 1px yellow, -1px -1px 0 yellow, 1px -1px 0 yellow, -1px 1px 0 yellow; background:#2c2c2c"><i
                        class="now-ui-icons users_single-02"></i> <a href="{{ route('login') }}"
                        class="text-sm  underline" style="text-decoration: none; color:black;">Mi cuenta</a></button>
                @endauth
            </div>
            @endif

        </div>
    </div>
</nav>
<!-- Final del Navbar-->

{{-- Contenido --}}
<div class="wrapper">
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true"
            style="background-image: url('../img/fotosWelcome/banda_welcome.jpg');">
        </div>
        <div class="content-center">
            <div class="container">
                {{-- <div class="image-container image-center" style="background-image: url('../img/fotosWelcome/logo_coche.png')"></div> --}}
                <img src="../img/fotosWelcome/logo_coche.png">
                {{-- <h1 class="title">KoolCars</h1> --}}
            </div>
        </div>
    </div>
    <div class="#" style="background-color: #1a1a1a">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title" style="color: white">¿Que es KoolCars?</h2>
                    <h5 class="description">KoolCars nace de la ambición por los vehículos, en especial por el mundo de
                        los coches. En nuestra web podrás visualizar un catálogo con todas las marcas y modelos
                        actuales, ver sus precios, que tipo de coche te puede interesar o cuáles se adaptan más a tus
                        necesidades. Ofrenciendo la mejor información de manera estructurada sobre tu próximo coche.
                    </h5>
                </div>
            </div>
            <div class="separator separator-primary"></div>
            <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Imagen de la izquierda -->
                        <div class="image-container image-left"
                            style="background-image: url('../img/fotosWelcome/fotoIzq.png')">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- Imagen de la derecha -->
                        <div class="image-container image-right"
                            style="background-image: url('../img/fotosWelcome/fotoDere2.png')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-team text-center" style="background-color: #1a1a1a">
        <div class="container">
            <h3 class="title" style="color: white">ENTRA Y EXPLORA TODO LO QUE PUEDES HACER</h3>
            <div class="team">
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="../img/fotosWelcome/portapapeles.png" alt="Thumbnail Image"
                                class="rounded-circle img-fluid img-raised">
                            <h4 class="title" style="color: white">Amplio Catálogo</h4>
                            <p class="description">Aquí encontrarás un amplio catálogo de marcas de coches con sus
                                modelos correspondientes. Cada año nuestro catálogo se renueva para poder mostrar las
                                últimas novedades de las
                                marcas para sus vehículos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="../img/fotosWelcome/setting.png" alt="Thumbnail Image"
                                class="rounded-circle img-fluid img-raised">
                            <h4 class="title" style="color: white">Fácil de usar</h4>
                            <p class="description">Siempre que quieras y desde donde estés. Añade filtros, guarda tus
                                favoritos, descubre toda la información sobre tu próximo coche
                                y configúralo a tu gusto!.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="../img/fotosWelcome/checked.png" alt="Thumbnail Image"
                                class="rounded-circle img-fluid img-raised">
                            <h4 class="title" style="color: white">Transparencia</h4>
                            <p class="description">No te lleves sorpresas, nuestras publicaciones incluyen información
                                clara y detallada, asi siempre sabrás a la perfección todo lo
                                importante sobre tu próximo coche.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer --}}
    <footer class="footer footer-default" style="background-color: #1a1a1a">
        <div class=" container text-center">
            <div class="copyright" id="copyright" style="color:white;">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

                </script> KoolCars, All rights reserved
            </div>
        </div>
    </footer>
    {{-- Final del Footer --}}
</div>
{{-- Final del Contenido --}}
@endsection
