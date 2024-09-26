<!doctype html>
<html lang="es">
@include('componentes.head')  <!-- Corrección aquí: uso de comillas simples -->
<body class="bg_home">
    @yield('seccionBody')
    @include('componentes.script')
    @stack('scripts')
</body>
</html>
