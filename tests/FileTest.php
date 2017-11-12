<?php
/**
 * PHP library for file management.
 *
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-File
 * @since      1.1.4
 */
namespace Josantonius\File;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for File library.
 *
 * @since 1.1.4
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
        $actual = $this->File;
        $this->assertInstanceOf('Josantonius\File\File', $actual);
    }

    /**
     * Test if a local file exists.
     *
     * @since 1.1.4
     */
    public function testIfLocalFileExists()
    {
        $this->assertTrue(
            $this->File->exists(__FILE__)
        );
    }

    /**
     * Test if a local file doesn't exists.
     *
     * @since 1.1.4
     */
    public function testIfLocalFileDoesNotExists()
    {
        $this->assertFalse(
            $this->File->exists(__DIR__ . '/test.txt')
        );
    }

    /**
     * Test if a external file exists.
     *
     * @since 1.1.4
     */
    public function testIfExternalFileExists()
    {
        $this->assertTrue(
            $this->File->exists('https://raw.githubusercontent.com/Josantonius/PHP-File/master/composer.json')
        );
    }

    /**
     * Test if a external file doesn't exists.
     *
     * @since 1.1.4
     */
    public function testIfExternalFileDoesNotExists()
    {
        $this->assertFalse(
            $this->File->exists('https://raw.githubusercontent.com/unknown.json')
        );
    }

    /**
     * Test delete a local file.
     *
     * @since 1.1.4
     */
    public function testDeleteLocalFile()
    {
        touch(__DIR__ . '/test.txt');

        $this->assertTrue(
            $this->File->delete(__DIR__ . '/test.txt')
        );
    }

    /**
     * Test delete missing local file.
     *
     * @since 1.1.4
     */
    public function testDeleteMissingLocalFile()
    {
        $this->assertFalse(
            $this->File->delete(__DIR__ . '/test.txt')
        );
    }

    /**
     * Test create directory.
     *
     * @since 1.1.4
     */
    public function testCreateDir()
    {
        $this->assertTrue(
            $this->File->createDir(__DIR__ . '/test/')
        );
    }

    /**
     * Test error to create directory.
     *
     * @since 1.1.4
     */
    public function testCreateDirError()
    {
        $this->assertFalse(
            $this->File->createDir('')
        );
    }

    /**
     * Test delete empty directory.
     *
     * @since 1.1.4
     */
    public function testDeleteEmptyDir()
    {
        $this->assertTrue(
            $this->File->deleteEmptyDir(__DIR__ . '/test/')
        );
    }

    /**
     * Test error to delete empty directory.
     *
     * @since 1.1.4
     */
    public function testDeleteEmptyDirError()
    {
        $this->assertFalse(
            $this->File->deleteEmptyDir(__DIR__ . '/test/')
        );
    }

    /**
     * Test copy directory recursively.
     *
     * @since 1.1.4
     */
    public function testCopyDirRecursively()
    {
        $this->File->createDir(__DIR__ . '/test/test/test/');

        touch(__DIR__ . '/test/test/test/test.txt');

        $this->assertTrue(
            $this->File->copyDirRecursively(__DIR__ . '/test/', __DIR__ . '/copy/')
        );
    }

    /**
     * Test copy missing directory recursively.
     *
     * @since 1.1.4
     */
    public function testCopyMissingDirRecursively()
    {
        $this->assertFalse(
            $this->File->deleteDirRecursively(__DIR__ . '/unknown/')
        );
    }

    /**
     * Test delete directory recursively.
     *
     * @since 1.1.4
     */
    public function testDeleteDirRecursively()
    {
        $this->assertTrue(
            $this->File->deleteDirRecursively(__DIR__ . '/test/')
        );

        $this->assertTrue(
            $this->File->deleteDirRecursively(__DIR__ . '/copy/')
        );
    }

    /**
     * Test delete missing directory recursively.
     *
     * @since 1.1.4
     */
    public function testDeleteMissingDirRecursively()
    {
        $this->assertFalse(
            $this->File->deleteDirRecursively(__DIR__ . '/test/')
        );
    }

    /**
     * Test get files from directory.
     *
     * @since 1.1.4
     */
    public function testGetFilesFromDir()
    {
        $this->assertContains(
            'DirectoryIterator',
            get_class($this->File->getFilesFromDir(__DIR__))
        );
    }

    /**
     * Test get files from missing directory.
     *
     * @since 1.1.4
     */
    public function testGetFilesFromMissingDir()
    {
        $this->assertFalse(
            $this->File->getFilesFromDir('')
        );
    }
}
