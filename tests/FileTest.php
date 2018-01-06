<?php
/**
 * PHP library for file management.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-File
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-File
 * @since     1.1.4
 */
namespace Josantonius\File;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for File library.
 */
class FileTest extends TestCase
{
    /**
     * File instance.
     *
     * @since 1.1.6
     *
     * @var object
     */
    protected $File;

    /**
     * Set up.
     *
     * @since 1.1.6
     */
    public function setUp()
    {
        parent::setUp();

        $this->File = new File;
    }

    /**
     * Check if it is an instance of File.
     *
     * @since 1.1.6
     */
    public function testIsInstanceOfFile()
    {
        $this->assertInstanceOf('Josantonius\File\File', $this->File);
    }

    /**
     * Test if a local file exists.
     */
    public function testIfLocalFileExists()
    {
        $file = $this->File;

        $this->assertTrue(
            $file::exists(__FILE__)
        );
    }

    /**
     * Test if a local file doesn't exists.
     */
    public function testIfLocalFileDoesNotExists()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::exists(__DIR__ . '/test.txt')
        );
    }

    /**
     * Test if a external file exists.
     */
    public function testIfExternalFileExists()
    {
        $file = $this->File;

        $this->assertTrue(
            $file::exists('https://raw.githubusercontent.com/Josantonius/PHP-File/master/composer.json')
        );
    }

    /**
     * Test if a external file doesn't exists.
     */
    public function testIfExternalFileDoesNotExists()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::exists('https://raw.githubusercontent.com/unknown.json')
        );
    }

    /**
     * Test delete a local file.
     */
    public function testDeleteLocalFile()
    {
        $file = $this->File;

        touch(__DIR__ . '/test.txt');

        $this->assertTrue(
            $file::delete(__DIR__ . '/test.txt')
        );
    }

    /**
     * Test delete missing local file.
     */
    public function testDeleteMissingLocalFile()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::delete(__DIR__ . '/test.txt')
        );
    }

    /**
     * Test create directory.
     */
    public function testCreateDir()
    {
        $file = $this->File;

        $this->assertTrue(
            $file::createDir(__DIR__ . '/test/')
        );
    }

    /**
     * Test error to create directory.
     */
    public function testCreateDirError()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::createDir('')
        );
    }

    /**
     * Test delete empty directory.
     */
    public function testDeleteEmptyDir()
    {
        $file = $this->File;

        $this->assertTrue(
            $file::deleteEmptyDir(__DIR__ . '/test/')
        );
    }

    /**
     * Test error to delete empty directory.
     */
    public function testDeleteEmptyDirError()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::deleteEmptyDir(__DIR__ . '/test/')
        );
    }

    /**
     * Test copy directory recursively.
     */
    public function testCopyDirRecursively()
    {
        $file = $this->File;

        $file::createDir(__DIR__ . '/test/test/test/');

        touch(__DIR__ . '/test/test/test/test.txt');

        $this->assertTrue(
            $file::copyDirRecursively(__DIR__ . '/test/', __DIR__ . '/copy/')
        );
    }

    /**
     * Test copy missing directory recursively.
     */
    public function testCopyMissingDirRecursively()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::deleteDirRecursively(__DIR__ . '/unknown/')
        );
    }

    /**
     * Test delete directory recursively.
     */
    public function testDeleteDirRecursively()
    {
        $file = $this->File;

        $this->assertTrue(
            $file::deleteDirRecursively(__DIR__ . '/test/')
        );

        $this->assertTrue(
            $file::deleteDirRecursively(__DIR__ . '/copy/')
        );
    }

    /**
     * Test delete missing directory recursively.
     */
    public function testDeleteMissingDirRecursively()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::deleteDirRecursively(__DIR__ . '/test/')
        );
    }

    /**
     * Test get files from directory.
     */
    public function testGetFilesFromDir()
    {
        $file = $this->File;

        $this->assertContains(
            'DirectoryIterator',
            get_class($file::getFilesFromDir(__DIR__))
        );
    }

    /**
     * Test get files from missing directory.
     */
    public function testGetFilesFromMissingDir()
    {
        $file = $this->File;

        $this->assertFalse(
            $file::getFilesFromDir('')
        );
    }
}
