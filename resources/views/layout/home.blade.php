<!doctype html>
<html lang="es">
@include(componentes.head')
<body class="bg_home">
    @yield('body')
    @include('componentes.script')
    @stack('scripts')
</body>
</html>