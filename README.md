# Bootstrap
<a name="top"></a>

## Indice de Contenidos.

- [Instalación](#item1)
- [Color modes](#item2)
- [Componentes](#item3)
- [Variables de componentes](#item4)
- [Puntos de ruptura](#item5)
- [Contenedores](#item6)

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
|Extra Pequeño|Pequeño|Medio|Grande|Extra grande|XX-Grande|
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
