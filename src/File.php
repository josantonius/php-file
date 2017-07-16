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

namespace Josantonius\File;

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
    public static function searchString($search, $pathfile) {
        
        $file = fopen($pathfile, 'r+');
 
        while(!feof($file)) {

            $result = fgets($file);
        }

        fclose($file);

        return (strpos($result, $search)) ? true : false;
    }
}
