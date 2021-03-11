<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('kitUI/assets/css/bootstrap.min.css')}}" crossorigin="anonymous">
    <link href="{{asset('kitUI/assets/css/now-ui-kit.css')}}" rel="stylesheet" />
    {{-- Link para librería Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>@yield('titulo')</title>
</head>

<body style="background-color:  #1a1a1a">
    @yield('contenido')
    {{-- Scripts para el Kit de la Interfaz de Usuario --}}
    <script src="{{asset('kitUI/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('kitUI/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('kitUI/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('kitUI/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('kitUI/assets/js/now-ui-kit.js?v=1.2.0')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('js/mijs.js')}}"></script>
</body>

</html>
