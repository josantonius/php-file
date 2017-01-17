<?php declare(strict_types=1);
/**
 * PHP library for file management.
 * 
 * @category   JST
 * @package    File
 * @subpackage File
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-File
 * @since      File available since 1.0.0 - Update: 2017-01-17
 */

namespace Josantonius\File;

# use Josantonius\File\Exception\FileException;

/**
 * File handler.
 *
 * @since 1.0.0
 */
class File {

   /**
     * Search for part of a string in a file.
     *
     * @since 1.0.0
     *
     * @param string $search   → word or term to search
     * @param string $pathfile → full path to the file
     *
     * @return bool
     */
    public static function searchString(string $search, string $pathfile): bool {
        
        $file = fopen($pathfile, "r+");
 
        while(!feof($file)) {

            $result = fgets($file);
        }

        fclose($file);

        return (strpos($result, $search)) ? true : false;
    }
}