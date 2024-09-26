<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="shortcut icon" href="{{ asset('img/icon.png') }}"> -->
    @livewireStyles
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- estilos propiso --}}
    <link rel="stylesheet" href="{{ asset('css/diseño.css') }}">
    <!-- iconos fontaweasome -->
    <link href="{{ asset('iconos/fontawesome-free-6.1.1-web/css/all.css') }}" rel="stylesheet">
    <!--titulo-->
    <title>@yield('title')</title>
    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
       
</head>