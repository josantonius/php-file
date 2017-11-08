# CHANGELOG

## 1.1.6 - 2017-11-08

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## 1.1.5 - 2017-10-27

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `File/phpcs.ruleset.xml` file.

* Deleted `File/src/bootstrap.php` file.

* Deleted `File/tests/bootstrap.php` file.

* Deleted `File/vendor` folder.

* Changed `Josantonius\File\Test\FileTest` class to  `Josantonius\File\FileTest` class.

## 1.1.4 - 2017-09-13

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Added `File/src/bootstrap.php` file

* Added `File/tests/bootstrap.php` file.

* Added `File/phpunit.xml.dist` file.
* Added `File/_config.yml` file.
* Added `File/.travis.yml` file.

* Added `Josantonius\File\Test\FileTest::CopyDirRecursively()` method.

* Deleted `Josantonius\File\Tests\FileTest::testSearchString()` method.

* Deleted `Josantonius\File\Tests\FileTest` class.
* Deleted `Josantonius\File\Tests\FileTest::testSearchString()` method.

* Added `Josantonius\File\Test\FileTest` class.
* Added `Josantonius\File\Test\FileTest::testIfLocalFileExists()` method.
* Added `Josantonius\File\Test\FileTest::testIfLocalFileDoesNotExists()` method.
* Added `Josantonius\File\Test\FileTest::testIfExternalFileExists()` method.
* Added `Josantonius\File\Test\FileTest::testIfExternalFileDoesNotExists()` method.
* Added `Josantonius\File\Test\FileTest::testDeleteLocalFile()` method.
* Added `Josantonius\File\Test\FileTest::testDeleteMissingLocalFile()` method.
* Added `Josantonius\File\Test\FileTest::testCreateDir()` method.
* Added `Josantonius\File\Test\FileTest::testCreateDirError()` method.
* Added `Josantonius\File\Test\FileTest::testDeleteEmptyDir()` method.
* Added `Josantonius\File\Test\FileTest::testDeleteEmptyDirError()` method.
* Added `Josantonius\File\Test\FileTest::testDeleteDirRecursively()` method.
* Added `Josantonius\File\Test\FileTest::testDeleteMissingDirRecursively()` method.
* Added `Josantonius\File\Test\FileTest::testGetFilesFromDir()` method.
* Added `Josantonius\File\Test\FileTest::testGetFilesFromMissingDir()` method.

## 1.1.3 - 2017-09-03

* Added `Josantonius\File\File::exists()` method.
* Added `Josantonius\File\File::delete()` method.
* Added `Josantonius\File\File::createDir()` method.
* Added `Josantonius\File\File::deleteEmptyDir()` method.
* Added `Josantonius\File\File::deleteDirRecursively()` method.
* Added `Josantonius\File\File::getFilesFromDir()` method.

## 1.1.2 - 2017-07-16

* Deleted `Josantonius\File\Exception\FileException` class.
* Deleted `Josantonius\File\Exception\Exceptions` abstract class.
* Deleted `Josantonius\File\Exception\FileException->__construct()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-17

* Added `Josantonius\File\File` class.
* Added `Josantonius\File\File::searchString()` method.

## 1.0.0 - 2017-01-17

* Added `Josantonius\File\Exception\FileException` class.
* Added `Josantonius\File\Exception\Exceptions` abstract class.
* Added `Josantonius\File\Exception\FileException->__construct()` method.

## 1.0.0 - 2017-01-17

* Added `Josantonius\File\Tests\FileTest` class.
* Added `Josantonius\File\Tests\FileTest::testSearchString()` method.
