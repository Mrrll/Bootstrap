# Bootstrap
<a name="top"></a>

## Indice de Contenidos.

- [Instalación](#item1)
- [Color modes](#item2)
- [Componentes](#item3)
- [Variables de componentes](#item4)
- [Puntos de ruptura](#item5)
- [Contenedores](#item6)
- [Sistema de red(Grid)](#item7)
- [Columnas](#item8)

<a name="item1"></a>

## Instalación

###### Instalación de Bootstrap en laravel 10

>Typee: en la Consola:
```console
npm install bootstrap @popperjs/core
```
> Instalamos Sass

>Typee: en la Consola:
```console
npm install sass --save-dev
```

>Creamos o renombramos la carpeta `css` de `resources\css` a `scss` y creamos o renombramos el archivo `app.css` a `app.scss`.

>Abrimos el archivo `app.scss` de la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```scss
@import "~bootstrap/scss/bootstrap";
```

>Abrimos el archivo `app.js` de la carpeta `resources\js\app.js` y escribimos lo siguiente.

```js
import * as bootstrap from 'bootstrap';
```

>Abrimos el archivo `vite.config.js` de la carpeta `/` y escribimos lo siguiente.

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});
```

>Creamos  el archivo `plantilla.blade.php` de la carpeta `resources\views\layouts\plantilla.blade.php/` y dentro del `head` escribimos lo siguiente.

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    Hola Mundo !!!
</body>
</html>
```

```php
@vite(['resources/scss/app.scss', 'resources/js/app.js'])
```

>Abrimos el archivo `web.php` de la carpeta `routes\web.php/` modificamos la ruta `/` escribimos lo siguiente.

```php
Route::get('/', function () {
    return view('layouts.plantilla');
});
```

>Podemos inicializar los servidores Frontend y Backend

[Subir](#top)

<a name="item2"></a>

## Color modes

>Creamos el archivo `theme.scss` en la carpeta `resources\scss\theme.scss` y escribimos lo siguiente.

```scss
[data-bs-theme="dark"] {
  --bs-body-color: var(--bs-white);
  --bs-body-color-rgb: #{to-rgb($white)};
  --bs-body-bg: var(--bs-dark);
  --bs-body-bg-rgb: #{to-rgb($dark)};
  --bs-tertiary-bg: #{$gray-600};

  .dropdown-menu {
    --bs-dropdown-bg: #{mix($gray-500, $gray-600)};
    --bs-dropdown-link-active-bg: #{$gray-700};
  }

  .btn-secondary {
    --bs-btn-bg: #{mix($teal-100, $gray-900, .5)};
    --bs-btn-border-color: #{rgba($white, .25)};
    --bs-btn-hover-bg: #{darken(mix($teal-100, $gray-600, .5), 5%)};
    --bs-btn-hover-border-color: #{rgba($white, .25)};
    --bs-btn-active-bg: #{darken(mix($teal-100, $gray-600, .5), 10%)};
    --bs-btn-active-border-color: #{rgba($white, .5)};
    --bs-btn-focus-border-color: #{rgba($white, .5)};
    --bs-btn-focus-box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .2);
  }
}
```

>Abrimos el archivo `app.scss` en la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```scss
@import "theme";
```

>Abrimos el archivo `plantilla.blade.php` en la carpeta `resources\views\layouts\plantilla.blade.php` y escribimos lo siguiente.

```php
<html lang="es" data-bs-theme="dark">
```

[Subir](#top)


<a name="item3"></a>

## Componentes

>Abrimos el archivo `plantilla.blade.php` en la carpeta `resources\views\layouts\plantilla.blade.php` y escribimos lo siguiente.

```php
    <div class="callout callout-info">
        Hola Mundo !!!
    </div>
    <div class="callout callout-warning">
        Hola Mundo !!!
    </div>
    <div class="callout callout-danger">
        Hola Mundo !!!
    </div>
```

>Abrimos el archivo `app.scss` en la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```scss
.callout {
    width: 100%;
    border-left: 1rem solid;
    padding: 2rem;
}

.callout-info {
    background-color: $blue-400;
    border-left-color: $blue-500;
}
.callout-warning {
    background-color: $yellow-300;
    border-left-color: $yellow-500;
}
.callout-danger {
    background-color: $red-500;
    border-left-color: $red-600;
}
```

[Subir](#top)

<a name="item4"></a>

## Variables de componentes

>Abrimos el archivo `app.scss` en la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```scss
:root {
  --my-color: red
}

body {
  color: var(--my-color)
}
```

[Subir](#top)

<a name="item5"></a>

## Puntos de ruptura

```scss
$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
);
```
**`Nota :`Estos puntos de interrupción se pueden personalizar a través hoja de estilo `_variables.scss` .**

[Subir](#top)

<a name="item6"></a>

## Contenedores

>.container, que establece un max-widthen cada punto de interrupción de respuesta
>.container-{breakpoint}, que es width: 100%hasta el punto de interrupción especificado
>.container-fluid, que está width: 100%en todos los puntos de interrupción

>Abrimos el archivo `plantilla.blade.php` en la carpeta `resources\views\layouts\plantilla.blade.php` y escribimos lo siguiente.

```php
    <div class="container bg-light">Contenedor receptivo de ancho fijo, lo que significa que max-width cambia en cada punto de interrupción.</div>
    <div class="container-sm bg-primary text-light">100% Ancho hasta  punto de interrupción pequeño</div>
    <div class="container-md bg-secondary text-light">100% Ancho hasta punto de interrupción medio</div>
    <div class="container-lg bg-danger text-light">100% Ancho hasta punto de ruptura grande</div>
    <div class="container-xl bg-warning">100% Ancho hasta punto de interrupción extra grande</div>
    <div class="container-xxl bg-white text-dark">100% Ancho hasta el punto de ruptura extra extra grande</div>
    <div class="container-fluid bg-success text-light">Contenedor de ancho completo, que abarque todo el ancho de la ventana gráfica</div>
    <div class="custom-container bg-warning text-light">Contenedor Personalizado de ancho completo, que abarque todo el ancho de la ventana gráfica</div>
```
|Extra Pequeño |Pequeño |Medio |Grande |Extra grande | XX-Grande|
| --- | --- | --- | --- | --- | --- |
|<576 píxeles|≥576px|≥768px| ≥992px|≥1200px|≥1400px|
| --- | --- | --- | --- | --- | --- |
|.container|	100% |	540px |	720px |	960px |	1140px | 1320px|
|.container-sm|	100%|	540px|	720px|	960px|	1140px|	1320px|
|.container-md|	100%|	100%|	720px|	960px|	1140px|	1320px|
|.container-lg|	100%|	100%|	100%|	960px|	1140px|	1320px|
|.container-xl|	100%|	100%|	100%|	100%|	1140px|	1320px|
|.container-xxl|	100%|	100%|	100%|	100%|	100%|	1320px|
|.container-fluid|	100%|	100%|	100%|	100%|	100%|	100%|

>Abrimos el archivo `app.scss` en la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```scss
// Source mixin
@mixin make-container($padding-x: $container-padding-x) {
  width: 100%;
  padding-right: $padding-x;
  padding-left: $padding-x;
  margin-right: auto;
  margin-left: auto;
}

// Usage
.custom-container {
  @include make-container();
}
```

[Subir](#top)

<a name="item7"></a>

## Sistema de red(Grid)

>Abrimos el archivo `plantilla.blade.php` en la carpeta `resources\views\layouts\plantilla.blade.php` y escribimos lo siguiente.

```php
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
```

>Abrimos el archivo `app.scss` en la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```php
.bd-example {
  --bd-example-padding: 1rem;
  position: relative;
  padding: var(--bd-example-padding);
  border: solid var(--bs-border-color);
  border-width: 1px 0;
  background-color: red;
}
.bd-example-row {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  background-color: $purple-800;
  border: 2px solid $purple-900;
}
.bd-example-col {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  background-color: $purple-500;
  border: 2px solid $purple-600;
}
.element {
  // Tres columnas para empezar
  @include row-cols(3);

  // Cinco columnas desde el punto de ruptura medio hacia arriba
  @include media-breakpoint-up(md) {
    @include row-cols(5);
  }
}
.example-container {
  @include make-container();
  // Make sure to define this width after the mixin to override
  // `width: 100%` generated by `make-container()`
  width: 800px;
}

.example-row {
  @include make-row();
  --bd-example-padding: 1rem;
  border: solid var(--bs-border-color);
  background-color: red;
}

.example-content-main {
  @include make-col-ready();

  @include media-breakpoint-up(sm) {
    @include make-col(6);
  }
  @include media-breakpoint-up(lg) {
    @include make-col(8);
  }
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  background-color: $teal-800;
  border: 2px solid $teal-900;
}

.example-content-secondary {
  @include make-col-ready();

  @include media-breakpoint-up(sm) {
    @include make-col(6);
  }
  @include media-breakpoint-up(lg) {
    @include make-col(4);
  }
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  background-color: $indigo-800;
  border: 2px solid $indigo-900;
}
```
[Subir](#top)

<a name="item8"></a>

## Columnas

>Abrimos el archivo `plantilla.blade.php` en la carpeta `resources\views\layouts\plantilla.blade.php` y escribimos lo siguiente.

```php
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
```

>Abrimos el archivo `app.scss` en la carpeta `resources\scss\app.scss` y escribimos lo siguiente.

```scss
.bd-example2 {
  --bd-example-padding: 1rem;
  position: relative;
  padding: var(--bd-example-padding);
  border: solid var(--bs-border-color);
  border-width: 1px 0;
  background-color: red;
  height: 150px;
}
.bd-example3 {
  --bd-example-padding: 1rem;
  position: relative;
  padding: var(--bd-example-padding);
  border: solid var(--bs-border-color);
  border-width: 1px 0;
  background-color: red;
}
.bd-example2-row {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  background-color: $orange-200;
  border: 2px solid $orange-300;
}
.bd-example2-col {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  background-color: $orange-500;
  border: 2px solid $orange-700;
}

```
[Subir](#top)
