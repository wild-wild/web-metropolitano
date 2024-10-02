<!doctype html>
<html lang="es">
@include('base.head')
<body>
    <div>{{ $slot }}</div>
    @include('base.script')
    @stack('scripts')
    @livewireScripts
</body>
</html>
