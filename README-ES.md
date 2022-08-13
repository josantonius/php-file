# PHP File library

[![Latest Stable Version](https://poser.pugx.org/josantonius/File/v/stable)](https://packagist.org/packages/josantonius/File)
[![License](https://poser.pugx.org/josantonius/File/license)](LICENSE)

[English version](README.md)

Biblioteca PHP para manejo de archivos.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Licencia](#licencia)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP File library**, simplemente escribe:

    composer require Josantonius/File

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    composer require Josantonius/File --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone <https://github.com/Josantonius/PHP-File.git>

O **instalarlo manualmente**:

[Descargar File.php](https://raw.githubusercontent.com/Josantonius/PHP-File/master/src/File.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-File/master/src/File.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Comprobar si existe un archivo en una ruta o url

```php
File::exists($file);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $file| Ruta o url del archivo. | string | Sí | |

**# Return** (boolean)

### - Eliminar archivos si existe

```php
File::delete($file);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $file| Ruta del archivo. | string | Sí | |

**# Return** (boolean)

### - Crear directorio si no existe

```php
File::createDir($path);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $path| Ruta donde crear directorio. | string | Sí | |

**# Return** (boolean)

### - Copiar directorio recursivamente

```php
File::copyDirRecursively($from, $to);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $from| Ruta del directorio a copiar. | string | Sí | |
| $to| Ruta del directorio de destino. | string | Sí | |

**# Return** (boolean)

### - Eliminar directorio vacío

```php
File::deleteEmptyDir($path);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $path| Ruta del directorio a eliminar. | string | Sí | |

**# Return** (boolean)

### - Eliminar directorio recursivamente

```php
File::deleteDirRecursively($path);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $path| Ruta del directorio a eliminar. | string | Sí | |

**# Return** (boolean)

### - Obtener archivos de un directorio

```php
File::getFilesFromDir($path);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $path| Ruta a examinar. | string | Sí | |

**# Return** (boolean)

## Cómo empezar

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\File\File;
```

Si la instalaste ### - manualmente### - , utiliza:

```php
require_once __DIR__ . '/File.php';

use Josantonius\File\File;
```

## Uso

Ejemplo de uso para esta biblioteca:

### - Comprobar si existe un archivo local

```php
<?php
File::exists('path/to/file.php');
```

### - Comprobar si existe un archivo exteno

```php
<?php
File::exists('https://raw.githubusercontent.com/Josantonius/PHP-File/master/composer.json');
```

Eliminar un archivo local:

```php
<?php
File::delete(__DIR__ . '/test.txt');
```

### - Crear directorio

```php
<?php
File::createDir(__DIR__ . '/test/');
```

### - Eliminar directorio vacío

```php
<?php
File::deleteEmptyDir(__DIR__ . '/test/');
```

### - Eliminar directorio recursivamente

```php
<?php
File::deleteDirRecursively(__DIR__ . '/test/');
```

### - Copiar directorio recursivamente

```php
<?php
File::copyDirRecursively(__DIR__ . '/test/', __DIR__ . '/copy/');
```

### - Obtener archivos de un directorio

```php
<?php
get_class(File::getFilesFromDir(__DIR__));
```

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    git clone https://github.com/Josantonius/PHP-File.git
    
    cd PHP-File

    composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    composer phpmd

Ejecutar todas las pruebas anteriores:

    composer tests

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2017 - 2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
