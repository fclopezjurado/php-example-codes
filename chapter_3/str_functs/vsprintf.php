<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * Return a formatted string.
 * http://php.net/manual/en/function.vsprintf.php
 * Operates as sprintf() but accepts an array of arguments, rather than a variable number of arguments.
 * @param string $format see sprintf() for a description of format.
 * @param array args
 * @param string array values as a formatted string according to format (which is described in the documentation for
 * sprintf()).
 */

var_dump(vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1'))); // 1988-08-01