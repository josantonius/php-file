<?php
/**
 * PHP library for file management.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-File
 * @since      1.0.0
 */

namespace Josantonius\File\Tests;

use Josantonius\File\File;

/**
 * Tests class for File library.
 *
 * @since 1.0.0
 */
class FileTest {

   /**
     * Search for part of a string in a file.
     *
     * @since 1.0.0
     */
    public static function testSearchString() {
        
        $search = 'Morbi';

        $filepath = 'resources/file.txt';

        var_dump(File::searchString($search, $filepath));
    }
}
