<?php 
/**
 * PHP library for file management.
 * 
 * @category   JST
 * @package    File
 * @subpackage FileTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-File
 * @since      File available since 1.0.0 - Update: 2017-01-17
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