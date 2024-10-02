<!doctype html>
<html lang="es">
@include('base.head')
<body class="bg_home">
    @yield('contenidoBody')
    @include('base.script')
    @stack('scripts')
</body>
</html>
