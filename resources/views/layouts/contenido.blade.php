<!doctype html>
<html lang="es">
@include('base.head')
<body>
<!-- barra de navegacion -->
@include('base.header')
<!-- contenido -->
 @yield('contenidoBody')
 <!-- footer -->
 @include('base.footer')
 <!-- scrip -->
    @include('base.script')
    @stack('scripts')
</body>
</html>
