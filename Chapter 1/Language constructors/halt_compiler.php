<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 15/10/2018
 * Time: 16:43
 *
 * Halts the compiler execution.
 * https://secure.php.net/manual/en/function.halt-compiler.php
 * Language constructor (brackets to pass parameters are not necessary if parameter is only one).
 */

/**
 * Open current file.
 */
$fp = fopen(__FILE__, 'r');

/**
 * Seek file pointer to data.
 * Byte position of the data start can be determined by the __COMPILER_HALT_OFFSET__ const.
 */
fseek($fp, __COMPILER_HALT_OFFSET__);

/**
 * And output it
 */
var_dump(stream_get_contents($fp));

/**
 * the end of the script execution
 */
__halt_compiler(); the installation data (eg. tar, gz, PHP, etc.)