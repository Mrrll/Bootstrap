# Bootstrap
<a name="top"></a>

## Indice de Contenidos.

- [Instalación](#item1)
- [Color modes](#item2)
- [Componentes](#item3)

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
