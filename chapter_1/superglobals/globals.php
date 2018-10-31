<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 30/10/18
 * Time: 11:45
 *
 * References all variables available in global scope
 * $GLOBALS is an associative array containing references to all variables which are currently defined in the global
 * scope of the script. The variable names are the keys of the array.
 * https://secure.php.net/manual/en/reserved.variables.globals.php
 * NOTE: PHP notice when an array element does not exist.
 */

function test()
{
    $foo = 'local variable';
    echo '$foo in global scope: ' . $GLOBALS['foo'] . PHP_EOL;
    echo '$foo in current scope: ' . $foo . PHP_EOL;
}

$foo = 'Example content';
test();
