<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 2/11/18
 * Time: 13:46
 *
 * Sets the value of a configuration option.
 * http://php.net/manual/en/function.ini-set.php
 * Returns the old value on success, FALSE on failure.
 */

echo ini_get('display_errors') . PHP_EOL;

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors') . PHP_EOL;