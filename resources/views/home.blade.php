@extends('layouts.app')
@section('titulo')
KoolCars || Home
@endsection
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}
<!-- Navbar -->

<nav class="navbar navbar-expand-md fixed-top" id="navbar">
    {{-- <a class="navbar-brand" href="#" id="textoNavbar">Navbar</a> --}}
    <div class="navbar-translate">
        <a href="{{route('welcome')}}">
        <img class="navbar-brand" src="{{asset('img/fotosWelcome/logo_letra.png')}}">
        </a>
    </div>
    <button class="navbar-toggler" id="textoNavbar" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="textoNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" id="textoNavbar">Encuetra tu coche</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="textoNavbar" href="http://example.com" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
        </ul>

        @if (Route::has('login'))
        <div> 
            @auth
            {{-- <a href="{{ url('/home') }}" class="text-sm text-gray underline">Home</a> --}}

            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
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

            {{-- @else
            <button class="btn btn-default btn-round" type="button"disabled><i class="now-ui-icons users_single-02"></i> <a href="{{ route('login') }}"
            class="text-sm text-gray underline" style="text-decoration: none">Mi cuenta</a></button> --}}
            @endauth
        </div>
        @endif

    </div>
</nav>

<div id="wrap">
    <div id="main" class="container clear-top">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque id erat porttitor, ut aliquet purus malesuada. Sed consequat sit amet mi eget euismod. Nulla in venenatis magna. Donec tempus elementum euismod. Proin sit amet viverra sapien, in luctus metus. Integer euismod, velit sit amet aliquam aliquet, justo arcu pellentesque elit, non tincidunt nibh elit vitae augue. Duis risus lacus, rutrum vel ipsum sit amet, aliquet convallis tortor. Etiam at pulvinar diam, vitae semper risus. Ut a fermentum nisi, id venenatis nibh.

            Sed dignissim dui vel tortor commodo, et maximus sapien efficitur. Pellentesque eget sodales diam. Curabitur sagittis, felis quis aliquam eleifend, magna nibh cursus elit, sed efficitur justo sapien a arcu. Nunc tristique a augue sit amet egestas. Sed ac velit convallis, fringilla dolor ac, pellentesque neque. Donec blandit mi a ultricies ultricies. Mauris ut auctor lorem, eget fringilla metus.
            
            Proin sodales nunc felis, eu auctor tortor placerat eu. Donec volutpat ac libero in viverra. Curabitur gravida nec libero at suscipit. Vestibulum interdum auctor tristique. Integer nec tempus diam. In aliquet tristique tristique. Cras augue enim, tristique sit amet elementum et, elementum id sapien. Cras at nisi et sapien euismod pharetra. Sed eu interdum diam. Nam tempor vehicula ligula, sit amet venenatis orci. Aenean elementum dignissim lectus, et aliquet felis rhoncus a. Aenean elementum dapibus quam, sit amet suscipit lorem egestas quis. Nullam feugiat nisl ipsum, eget ultricies erat efficitur ut. Proin eget tortor iaculis, lobortis ex nec, blandit dolor.
            
            Vestibulum condimentum laoreet ultrices. Maecenas sit amet ullamcorper nunc. Nulla condimentum ornare urna laoreet dapibus. Vestibulum sit amet sem sed risus porta ullamcorper. Etiam ex justo, gravida a mauris at, placerat hendrerit nibh. Morbi semper aliquet accumsan. Sed varius, purus at sagittis malesuada, lorem justo auctor libero, vel dapibus lacus sem sit amet ligula. Curabitur velit felis, tempus a sapien et, volutpat pellentesque nunc. Nunc imperdiet fermentum blandit. Quisque posuere id neque et gravida. Nulla et ante est. Etiam non elit sem. Pellentesque ac nulla eget neque luctus sagittis eu non libero. Quisque at consequat mauris, a imperdiet neque. Aliquam accumsan neque quis rhoncus scelerisque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            
            Pellentesque consectetur, nisi eu pellentesque consectetur, metus lorem aliquam magna, at bibendum eros justo vel elit. Aliquam lacus felis, pellentesque quis orci sed, sollicitudin pellentesque diam. Nam et metus sapien. Sed a metus sed urna accumsan mollis. Pellentesque pharetra egestas eros non aliquet. Proin laoreet, diam mattis consectetur rhoncus, diam nisi varius lectus, quis tristique ipsum erat interdum magna. Mauris at sodales lacus, vitae placerat arcu.</p>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

                </script> KoolCars, All rights reserved
            </div>
        </div>
      </footer>
</div>



@endsection
