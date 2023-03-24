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
    <h1>Columnas</h1>
    <h2>Alineación</h2>
    <h3>Alineamiento vertical</h3>
    <div class="container text-center">
        <div class="row align-items-start bd-example2 bd-example2-row">
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row align-items-center bd-example2 bd-example2-row">
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row align-items-end bd-example2 bd-example2-row">
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col bd-example2-col text-light">
                One of three columns
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row bd-example2 bd-example2-row">
            <div class="col align-self-start bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col align-self-center bd-example2-col text-light">
                One of three columns
            </div>
            <div class="col align-self-end bd-example2-col text-light">
                One of three columns
            </div>
        </div>
    </div>
    <h3>Alineación horizontal</h3>
    <div class="container text-center">
        <div class="row justify-content-start bd-example3 bd-example2-row">
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
        </div>
        <div class="row justify-content-center bd-example3 bd-example2-row">
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
        </div>
        <div class="row justify-content-end bd-example3 bd-example2-row">
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
        </div>
        <div class="row justify-content-around bd-example3 bd-example2-row">
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
        </div>
        <div class="row justify-content-between bd-example3 bd-example2-row">
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
        </div>
        <div class="row justify-content-evenly bd-example3 bd-example2-row">
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
            <div class="col-4 bd-example2-col text-light">
                One of two columns
            </div>
        </div>
    </div>
    <h3>Envoltura de columna</h3>
    <div class="container">
        <div class="row bd-example3 bd-example2-row">
            <div class="col-9 bd-example2-col text-light">.col-9</div>
            <div class="col-4 bd-example2-col text-light">.col-4<br>Como 9 + 4 = 13 &gt; 12, este div de 4 columnas de
                ancho se envuelve en una nueva línea como una unidad contigua.</div>
            <div class="col-6 bd-example2-col text-light">.col-6<br>Las columnas subsiguientes continúan a lo largo de
                la nueva línea..</div>
        </div>
    </div>
    <h3>Saltos de columna</h3>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col-6 col-sm-3 bd-example2-col text-light">.col-6 .col-sm-3</div>
            <div class="col-6 col-sm-3 bd-example2-col text-light">.col-6 .col-sm-3</div>

            <!-- Forzar las siguientes columnas para pasar a una nueva línea -->
            <div class="w-100"></div>

            <div class="col-6 col-sm-3 bd-example2-col text-light">.col-6 .col-sm-3</div>
            <div class="col-6 col-sm-3 bd-example2-col text-light">.col-6 .col-sm-3</div>
        </div>
    </div>
    <h4>Puntos de interrupción</h4>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col-6 col-sm-4 bd-example2-col text-light">.col-6 .col-sm-4</div>
            <div class="col-6 col-sm-4 bd-example2-col text-light">.col-6 .col-sm-4</div>

            <!-- Forzar las siguientes columnas para pasar a una nueva línea en el punto de interrupción md y hacia arriba -->
            <div class="w-100 d-none d-md-block"></div>

            <div class="col-6 col-sm-4 bd-example2-col text-light">.col-6 .col-sm-4</div>
            <div class="col-6 col-sm-4 bd-example2-col text-light">.col-6 .col-sm-4</div>
        </div>
    </div>
    <h2>Reordenando</h2>
    <h3>Ordenar clases</h3>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col bd-example2-col text-light">
                Primero en DOM, no se aplica orden
            </div>
            <div class="col order-5 bd-example2-col text-light">
                Segundo en DOM, con un orden más grande
            </div>
            <div class="col order-1 bd-example2-col text-light">
                Tercero en DOM, con un orden de 1
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col order-last bd-example2-col text-light">
                Primero en DOM, ordenado último
            </div>
            <div class="col bd-example2-col text-light">
                Segundo en DOM, desordenado
            </div>
            <div class="col order-first bd-example2-col text-light">
                Tercero en DOM, ordenado primero
            </div>
        </div>
    </div>
    <h2>Columnas de compensación</h2>
    <h3>Clases de compensación</h3>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col-md-4 bd-example2-col text-light">.col-md-4</div>
            <div class="col-md-4 offset-md-4 bd-example2-col text-light">.col-md-4 .offset-md-4</div>
        </div>
        <div class="row bd-example3 bd-example2-row">
            <div class="col-md-3 offset-md-3 bd-example2-col text-light">.col-md-3 .offset-md-3</div>
            <div class="col-md-3 offset-md-3 bd-example2-col text-light">.col-md-3 .offset-md-3</div>
        </div>
        <div class="row bd-example3 bd-example2-row">
            <div class="col-md-6 offset-md-3 bd-example2-col text-light">.col-md-6 .offset-md-3</div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col-sm-5 col-md-6 bd-example2-col text-light">.col-sm-5 .col-md-6</div>
            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 bd-example2-col text-light">.col-sm-5 .offset-sm-2
                .col-md-6 .offset-md-0</div>
        </div>
        <div class="row bd-example3 bd-example2-row">
            <div class="col-sm-6 col-md-5 col-lg-6 bd-example2-col text-light">.col-sm-6 .col-md-5 .col-lg-6</div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 bd-example2-col text-light">.col-sm-6
                .col-md-5 .offset-md-2 .col-lg-6
                .offset-lg-0</div>
        </div>
    </div>
    <h2>Utilidades de margen</h2>
    <div class="container text-center">
        <div class="row bd-example3 bd-example2-row">
            <div class="col-md-4 bd-example2-col text-light">.col-md-4</div>
            <div class="col-md-4 ms-auto bd-example2-col text-light">.col-md-4 .ms-auto</div>
        </div>
        <div class="row bd-example3 bd-example2-row">
            <div class="col-md-3 ms-md-auto bd-example2-col text-light">.col-md-3 .ms-md-auto</div>
            <div class="col-md-3 ms-md-auto bd-example2-col text-light">.col-md-3 .ms-md-auto</div>
        </div>
        <div class="row bd-example3 bd-example2-row">
            <div class="col-auto me-auto bd-example2-col text-light">.col-auto .me-auto</div>
            <div class="col-auto bd-example2-col text-light">.col-auto</div>
        </div>
    </div>
    <h2>Clases de columna independientes</h2>
    <div class="col-3 p-3 mb-2 bd-example2-col text-light">
        .col-3: width of 25%
    </div>
    <div class="col-sm-9 p-3 bd-example2-col text-light">
        .col-sm-9: width of 75% above sm breakpoint
    </div>
    <div class="container clearfix">
        <img src="..." class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <svg class="bd-placeholder-img col-md-6 float-md-end mb-3 ms-md-3" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: imagen flotante responsiva" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="35%" y="50%" fill="#dee2e6" dy=".3em">Responsive floated image</text></svg>
        <p>
            A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding
            quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
        </p>

        <p>
            As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with
            some actual content in here, rather than just this boring placeholder text that goes on and on, but actually
            conveys no tangible information at. It simply takes up space and should not really be read.
        </p>

        <p>
            And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or
            some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
        </p>
    </div>
</body>

</html>
