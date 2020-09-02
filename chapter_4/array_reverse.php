<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:45
 *
 * array_reverse ( array $array [, bool $preserve_keys = FALSE ] ) : array
 *
 * Takes an input array and returns a new array with the order of the elements reversed.
 * http://php.net/manual/en/function.array-reverse.php
 * @param array $array the input array.
 * @param bool $preserve_keys if set to TRUE numeric keys are preserved. Non-numeric keys are not affected by this
 * setting and will always be preserved.
 * @return array the reversed array.
 */

$input = ['php', 4.0, ['green', 'red']];
var_dump(array_reverse($input));
var_dump(array_reverse($input, true));