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
    <h1>Componentes</h1>
    <div class="callout callout-info">
        Hola Mundo !!!
    </div>
    <div class="callout callout-warning">
        Hola Mundo !!!
    </div>
    <div class="callout callout-danger">
        Hola Mundo !!!
    </div>
    <h1>Contenedores</h1>
    <div class="container bg-light">Contenedor receptivo de ancho fijo, lo que significa que max-width cambia en cada
        punto de interrupción.</div>
    <div class="container-sm bg-primary text-light">100% Ancho hasta punto de interrupción pequeño</div>
    <div class="container-md bg-secondary text-light">100% Ancho hasta punto de interrupción medio</div>
    <div class="container-lg bg-danger text-light">100% Ancho hasta punto de ruptura grande</div>
    <div class="container-xl bg-warning">100% Ancho hasta punto de interrupción extra grande</div>
    <div class="container-xxl bg-white text-dark">100% Ancho hasta el punto de ruptura extra extra grande</div>
    <div class="container-fluid bg-success text-light">Contenedor de ancho completo, que abarque todo el ancho de la
        ventana gráfica</div>
    <div class="custom-container bg-warning text-light">Contenedor Personalizado de ancho completo, que abarque todo el
        ancho de la ventana gráfica</div>
    <h1>Grid</h1>
    <div class="container text-center">
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">
                Column
            </div>
            <div class="col bd-example-col text-light">
                Column
            </div>
            <div class="col bd-example-col text-light">
                Column
            </div>
        </div>
    </div>
    <h2>Columnas de diseño automático</h2>
    <h3>Ancho igual</h3>
    <div class="container text-center">
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">
                1 of 2
            </div>
            <div class="col bd-example-col text-light">
                2 of 2
            </div>
        </div>
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">
                1 of 3
            </div>
            <div class="col bd-example-col text-light">
                2 of 3
            </div>
            <div class="col bd-example-col text-light">
                3 of 3
            </div>
        </div>
    </div>
    <h2>Establecer un ancho de columna</h2>
    <div class="container text-center">
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">
                1 of 3
            </div>
            <div class="col-6 bd-example-col text-light">
                2 of 3 (más ancho)
            </div>
            <div class="col bd-example-col text-light">
                3 of 3
            </div>
        </div>
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">
                1 of 3
            </div>
            <div class="col-5 bd-example-col text-light">
                2 of 3 (más ancho)
            </div>
            <div class="col bd-example-col text-light">
                3 of 3
            </div>
        </div>
    </div>
    <h2>Contenido de ancho variable</h2>
    <div class="container text-center">
        <div class="row justify-content-md-center bd-example bd-example-row">
            <div class="col col-lg-2 bd-example-col text-light">
                1 of 3
            </div>
            <div class="col-md-auto bd-example-col text-light">
                Contenido de ancho variable
            </div>
            <div class="col col-lg-2 bd-example-col text-light">
                3 of 3
            </div>
        </div>
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">
                1 of 3
            </div>
            <div class="col-md-auto bd-example-col text-light">
                Contenido de ancho variable
            </div>
            <div class="col col-lg-2 bd-example-col text-light">
                3 of 3
            </div>
        </div>
    </div>
    <h2>Clases receptivas</h2>
    <h3>Todos los puntos de interrupción</h3>
    <div class="container text-center">
        <div class="row bd-example bd-example-row">
            <div class="col bd-example-col text-light">col</div>
            <div class="col bd-example-col text-light">col</div>
            <div class="col bd-example-col text-light">col</div>
            <div class="col bd-example-col text-light">col</div>
        </div>
        <div class="row bd-example bd-example-row">
            <div class="col-8 bd-example-col text-light">col-8</div>
            <div class="col-4 bd-example-col text-light">col-4</div>
        </div>
    </div>
    <h2>Apilado a horizontal</h2>
    <div class="container text-center">
        <div class="row bd-example bd-example-row">
            <div class="col-sm-8 bd-example-col text-light">col-sm-8</div>
            <div class="col-sm-4 bd-example-col text-light">col-sm-4</div>
        </div>
        <div class="row bd-example bd-example-row">
            <div class="col-sm bd-example-col text-light">col-sm</div>
            <div class="col-sm bd-example-col text-light">col-sm</div>
            <div class="col-sm bd-example-col text-light">col-sm</div>
        </div>
    </div>
    <h2>Mezclar y combinar</h2>
    <div class="container text-center">
        <!-- Apile las columnas en el móvil haciendo una de ancho completo y la otra de medio ancho -->
        <div class="row bd-example bd-example-row">
            <div class="col-md-8 bd-example-col text-light">.col-md-8</div>
            <div class="col-6 col-md-4 bd-example-col text-light">.col-6 .col-md-4</div>
        </div>
        <!-- Las columnas comienzan con un 50 % de ancho en dispositivos móviles y aumentan hasta un 33,3 % de ancho en computadoras de escritorio -->
        <div class="row bd-example bd-example-row">
            <div class="col-6 col-md-4 bd-example-col text-light">.col-6 .col-md-4</div>
            <div class="col-6 col-md-4 bd-example-col text-light">.col-6 .col-md-4</div>
            <div class="col-6 col-md-4 bd-example-col text-light">.col-6 .col-md-4</div>
        </div>

        <!-- Las columnas siempre tienen un 50% de ancho, en dispositivos móviles y de escritorio -->
        <div class="row bd-example bd-example-row">
            <div class="col-6 bd-example-col text-light">.col-6</div>
            <div class="col-6 bd-example-col text-light">.col-6</div>
        </div>
    </div>
    <h2>Columnas de fila</h2>
    <div class="container text-center">
        <div class="row row-cols-2 bd-example bd-example-row">
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-3 bd-example bd-example-row">
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-auto bd-example bd-example-row">
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-4 bd-example bd-example-row">
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-4 bd-example bd-example-row">
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col-6 bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 bd-example bd-example-row">
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
            <div class="col bd-example-col text-light">Column</div>
        </div>
    </div>
    <h2>Anidamiento</h2>
    <div class="container text-center">
        <div class="row bd-example bd-example-row">
            <div class="col-sm-3 bd-example-col text-light">
                Level 1: .col-sm-3
            </div>
            <div class="col-sm-9 bd-example-col text-light">
                <div class="row bd-example bd-example-row">
                    <div class="col-8 col-sm-6 bd-example-col text-light">
                        Level 2: .col-8 .col-sm-6
                    </div>
                    <div class="col-4 col-sm-6 bd-example-col text-light">
                        Level 2: .col-4 .col-sm-6
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Ejemplo de uso</h2>
    <div class="example-container">
        <div class="example-row">
            <div class="example-content-main">Main content</div>
            <div class="example-content-secondary">Secondary content</div>
        </div>
    </div>
</body>

</html>
