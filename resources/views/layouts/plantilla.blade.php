<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title')</title> --}}
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- @include('layouts.partials.header') --}}
    {{-- @yield('content') --}}
    <div class="callout callout-info">
        Hola Mundo !!!
    </div>
    <div class="callout callout-warning">
        Hola Mundo !!!
    </div>
    <div class="callout callout-danger">
        Hola Mundo !!!
    </div>
    <div class="container bg-light">Contenedor receptivo de ancho fijo, lo que significa que max-width cambia en cada punto de interrupción.</div>
    <div class="container-sm bg-primary text-light">100% Ancho hasta  punto de interrupción pequeño</div>
    <div class="container-md bg-secondary text-light">100% Ancho hasta punto de interrupción medio</div>
    <div class="container-lg bg-danger text-light">100% Ancho hasta punto de ruptura grande</div>
    <div class="container-xl bg-warning">100% Ancho hasta punto de interrupción extra grande</div>
    <div class="container-xxl bg-white text-dark">100% Ancho hasta el punto de ruptura extra extra grande</div>
    <div class="container-fluid bg-success text-light">Contenedor de ancho completo, que abarque todo el ancho de la ventana gráfica</div>
    <div class="custom-container bg-warning text-light">Contenedor Personalizado de ancho completo, que abarque todo el ancho de la ventana gráfica</div>

</body>
</html>
