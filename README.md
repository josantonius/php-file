# PHP File library

[![Latest Stable Version](https://poser.pugx.org/josantonius/File/v/stable)](https://packagist.org/packages/josantonius/File)
[![License](https://poser.pugx.org/josantonius/File/license)](LICENSE)

[Versión en español](README-ES.md)

PHP library for file management.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP File library**, simply:

    composer require Josantonius/File

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require Josantonius/File --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone <https://github.com/Josantonius/PHP-File.git>

Or **install it manually**:

[Download File.php](https://raw.githubusercontent.com/Josantonius/PHP-File/master/src/File.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-File/master/src/File.php

## Available Methods

Available methods in this library:

### - Check if a file exists in a path or url

```php
File::exists($file);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $file | Path or file url. | string | Yes | |

**# Return** (boolean)

### - Delete file if exists

```php
File::delete($file);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $file | File path. | string | Yes | |

**# Return** (boolean)

### - Create directory if not exists

```php
File::createDir($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path where to create directory. | string | Yes | |

**# Return** (boolean)

### - Copy directory recursively

```php
File::copyDirRecursively($from, $to);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $from| Path from copy. | string | Yes | |
| $to| Path to copy. | string | Yes | |

**# Return** (boolean)

### - Delete empty directory

```php
File::deleteEmptyDir($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path to delete. | string | Yes | |

**# Return** (boolean)

### - Delete directory recursively

```php
File::deleteDirRecursively($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path to delete. | string | Yes | |

**# Return** (boolean)

### - Get files from directory

```php
File::getFilesFromDir($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path where get file paths. | string | Yes | |

**# Return** (boolean)

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\File\File;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/File.php';

use Josantonius\File\File;
```

## Usage

Example of use for this library:

### - Check if a local file exists

```php
File::exists('path/to/file.php');
```

### - Check if a external file exists

```php
File::exists('https://raw.githubusercontent.com/Josantonius/PHP-File/master/composer.json');
```

### - Delete a local file

```php
File::delete(__DIR__ . '/test.txt');
```

### - Create directory

```php
File::createDir(__DIR__ . '/test/');
```

### - Delete empty directory

```php
File::deleteEmptyDir(__DIR__ . '/test/');
```

### - Delete directory recursively

```php
File::deleteDirRecursively(__DIR__ . '/test/');
```

### - Copy directory recursively

```php
File::copyDirRecursively(__DIR__ . '/test/', __DIR__ . '/copy/');
```

### - Get file paths from directory

```php
get_class(File::getFilesFromDir(__DIR__));
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/Josantonius/PHP-File.git
    
    cd PHP-File

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017 - 2022, [Josantonius](https://github.com/josantonius#contact)