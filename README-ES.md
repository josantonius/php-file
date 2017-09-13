# PHP File library

[![Latest Stable Version](https://poser.pugx.org/josantonius/file/v/stable)](https://packagist.org/packages/josantonius/file) [![Total Downloads](https://poser.pugx.org/josantonius/file/downloads)](https://packagist.org/packages/josantonius/file) [![Latest Unstable Version](https://poser.pugx.org/josantonius/file/v/unstable)](https://packagist.org/packages/josantonius/file) [![License](https://poser.pugx.org/josantonius/file/license)](https://packagist.org/packages/josantonius/file) [![Travis](https://travis-ci.org/Josantonius/PHP-File.svg)](https://travis-ci.org/Josantonius/PHP-File)

[English version](README.md)

Biblioteca PHP para manejo de archivos.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Métodos disponibles](#métodos-disponibles)
- [Uso](#uso)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP File library, simplemente escribe:

    $ composer require Josantonius/File

El comando anterior sólo instalará los archivos necesarios, si prefieres descargar todo el código fuente (incluyendo tests, directorio vendor, excepciones no utilizadas, documentos...) puedes utilizar:

    $ composer require Josantonius/File --prefer-source

También puedes clonar el repositorio completo con Git:

	$ git clone https://github.com/Josantonius/File.git
	
### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

### Cómo empezar y ejemplos

Para utilizar esta biblioteca, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\File\File;
```
### Métodos disponibles

Métodos disponibles en esta biblioteca:

```php
File::exists();
File::delete();
File::createDir();
File::deleteEmptyDir();
File::deleteDirRecursively();
File::getFilesFromDir();
```
### Uso

Ejemplo de uso para esta biblioteca:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\File\File;
```

### Tests 

Para ejecutar las [pruebas](tests/File/test) simplemente:

    $ git clone https://github.com/Josantonius/PHP-File.git
    
    $ cd PHP-File

    $ phpunit

## ☑ TODO

- [*] Completar tests
- [ ] Completar archivos README

### Contribuir
1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).