# Bootstrap
<a name="top"></a>

## Indice de Contenidos.

- [Instalación](#item1)

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
