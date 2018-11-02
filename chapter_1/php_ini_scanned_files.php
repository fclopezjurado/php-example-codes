<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 13:26
 *
 * Return a list (string) of .ini files parsed from the additional ini dir.
 * http://php.net/manual/en/function.php-ini-scanned-files.php
 * Returns a comma-separated list of configuration files parsed after php.ini. The directories searched are set by a
 * compile time option and, optionally, by an environment variable at run time
 */

$file_list = php_ini_scanned_files();

if (strlen($file_list) > 0) {
    $files = explode(',', $file_list);

    foreach ($files as $file) {
        echo trim($file) . PHP_EOL;
    }
}
