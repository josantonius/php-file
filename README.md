# PHP File library

[![Latest Stable Version](https://poser.pugx.org/josantonius/file/v/stable)](https://packagist.org/packages/josantonius/file) [![Total Downloads](https://poser.pugx.org/josantonius/file/downloads)](https://packagist.org/packages/josantonius/file) [![Latest Unstable Version](https://poser.pugx.org/josantonius/file/v/unstable)](https://packagist.org/packages/josantonius/file) [![License](https://poser.pugx.org/josantonius/file/license)](https://packagist.org/packages/josantonius/file)

[Spanish version](README-ES.md)

PHP library for file management.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP File library, simply:

    $ composer require Josantonius/File

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\File\File;
```
### Available Methods

Available methods in this library:

```php
File::searchString();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\File\File;

$search = 'Morbi';

$filepath = getcwd() . '/' . 'resources/file.txt';

File::searchString($search, $filepath); /* bool(true) */
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\File\\Tests\\', __DIR__ . '/vendor/josantonius/file/tests');

use Josantonius\File\Tests\FileTest;

```
Available test methods in this library:

```php
FileTest::testSearchString();
```

### Exception Handler

This library uses [exception handler](src/Exception) that you can customize.
### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.