# PHP File library

[![Latest Stable Version](https://poser.pugx.org/josantonius/File/v/stable)](https://packagist.org/packages/josantonius/File) [![Latest Unstable Version](https://poser.pugx.org/josantonius/File/v/unstable)](https://packagist.org/packages/josantonius/File) [![License](https://poser.pugx.org/josantonius/File/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/5477fb7485ae4c2f8bb8d674bcf74788)](https://www.codacy.com/app/Josantonius/PHP-File?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-File&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/File/downloads)](https://packagist.org/packages/josantonius/File) [![Travis](https://travis-ci.org/Josantonius/PHP-File.svg)](https://travis-ci.org/Josantonius/PHP-File) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-File/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-File)

[Versión en español](README-ES.md)

PHP library for file management.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP File library**, simply:

    $ composer require Josantonius/File

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/File --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-File.git

Or **install it manually**:

[Download File.php](https://raw.githubusercontent.com/Josantonius/PHP-File/master/src/File.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-File/master/src/File.php

## Available Methods

Available methods in this library:

### - Check if a file exists in a path or url:

```php
File::exists($file);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $file | Path or file url. | string | Yes | |

**# Return** (boolean)

### - Delete file if exists:

```php
File::delete($file);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $file | File path. | string | Yes | |

**# Return** (boolean)

### - Create directory if not exists:

```php
File::createDir($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path where to create directory. | string | Yes | |

**# Return** (boolean)

### - Copy directory recursively:

```php
File::copyDirRecursively($from, $to);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $from| Path from copy. | string | Yes | |
| $to| Path to copy. | string | Yes | |

**# Return** (boolean)

### - Delete empty directory:

```php
File::deleteEmptyDir($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path to delete. | string | Yes | |

**# Return** (boolean)

### - Delete directory recursively:

```php
File::deleteDirRecursively($path);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $path | Path to delete. | string | Yes | |

**# Return** (boolean)

### - Get files from directory:

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

### - Check if a local file exists:

```php
<?php
File::exists('path/to/file.php');
```

### - Check if a external file exists:

```php
<?php
File::exists('https://raw.githubusercontent.com/Josantonius/PHP-File/master/composer.json');
```

### - Delete a local file:

```php
<?php
File::delete(__DIR__ . '/test.txt');
```

### - Create directory:

```php
<?php
File::createDir(__DIR__ . '/test/');
```

### - Delete empty directory:

```php
<?php
File::deleteEmptyDir(__DIR__ . '/test/');
```

### - Delete directory recursively:

```php
<?php
File::deleteDirRecursively(__DIR__ . '/test/');
```

### - Copy directory recursively:

```php
<?php
File::copyDirRecursively(__DIR__ . '/test/', __DIR__ . '/copy/');
```

### - Get file paths from directory:

```php
<?php
get_class(File::getFilesFromDir(__DIR__));
```

## Tests 

To run [tests](tests) you just need [Composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-File.git
    
    $ cd PHP-File

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

## ☑ TODO

- [x] Create tests
- [x] Improve documentation

## Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

## Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).