<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 16:43
 *
 * is_array ( mixed $var ) : bool
 *
 * Finds whether the given variable is an array.
 * http://php.net/manual/en/function.is-array.php
 * @param array $var the variable being evaluated.
 * @return bool TRUE if var is an array, FALSE otherwise.
 */

$yes = ['this', 'is', 'an array'];
var_dump(is_array($yes));
$no = 'this is a string';
var_dump(is_array($no));