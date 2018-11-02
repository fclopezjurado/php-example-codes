<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 13:44
 *
 * Retrieve a path to the loaded php.ini file.
 * http://php.net/manual/en/function.php-ini-loaded-file.php
 * Returns an string with the loaded php.ini path, or FALSE if one is not loaded.
 */

$ini_path = php_ini_loaded_file();

if ($ini_path) {
    echo 'Loaded php.ini: ' . $ini_path . PHP_EOL;
} else {
    echo 'A php.ini file is not loaded';
}