<!doctype html>
<html lang="es">

@include('base.head')

<body>
    @extends('adminlte::page')
    @if (Auth::user()->hasAnyRole(['administrador', 'secretaria']))
    @section('content_top_nav_right')
        @include('layouts.notificacion')
    @endsection
@endif

    @section('content')
        @yield('contenidoBody')
    @stop

    {{-- scrip de adminLTE --}}
    @section('css')
        @include('base.head')
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
        <!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    @stop
    @section('js')
        <script type="text/javascript" src="{{ asset('js/alerta.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/modal.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/funciones.js') }}"></script>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        @include('base.script')
        @stack('scripts')
    @stop


</body>

</html>
