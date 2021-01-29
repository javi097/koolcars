@extends('plantilla.plantilla')
@section('titulo')
KoolCars
@endsection
@section('contenido')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark fixed-top" color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html">
          KoolCars
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        {{-- <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Back to Kit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
          </li>
        </ul> --}}
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
            </div>
            @endif

      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('../img/fotosWelcome/banda_welcome.jpg');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">KoolCars</h1>
          {{-- <div class="text-center">
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-google-plus"></i>
            </a>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="section section-about-us" style="background-color: #1a1a1a">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title" style="color: white">¿Que es KoolCars?</h2>
            <h5 class="description">KoolCars nace de la ambición por los vehículos, en especial por el mundo de los coches. En nuestra web podrás visualizar un catálogo con todas las marcas y modelos actuales, ver sus precios, que tipo de coche te puede interesar o cuáles se adaptan más a tus necesidades. Ofrenciendo la mejor información de manera estructurada sobre tu próximo coche.</h5>
          </div>
        </div>
        <div class="separator separator-primary"></div>
        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('../img/fotosWelcome/fotoIzq.png')">
                <!-- First image on the left side -->
              </div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-image: url('../img/fotosWelcome/fotoDere2.png')"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-team text-center"  style="background-color: #1a1a1a">
      <div class="container">
        <h3 class="title" style="color: white">ENTRA Y EXPLORA TODO LO QUE PUEDES HACER</h3>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <img src="../img/fotosWelcome/portapapeles.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title" style="color: white">Amplio Catálogo</h4>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="../img/fotosWelcome/setting.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title" style="color: white">Fácil de usar</h4>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="../img/fotosWelcome/checked.png" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title" style="color: white">Transparencia</h4>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  </div>