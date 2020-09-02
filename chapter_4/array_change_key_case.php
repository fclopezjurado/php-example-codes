<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 16:46
 *
 * array_change_key_case ( array $array [, int $case = CASE_LOWER ] ) : array
 *
 * Changes the case of all keys in an array.
 * http://php.net/manual/en/function.array-change-key-case.php
 * Returns an array with all keys from array lowercased or uppercased. Numbered indices are left as is.
 * @param array $array the array to work on.
 * @param int $case either CASE_UPPER or CASE_LOWER (default)
 * @return array with its keys lower or uppercased, or FALSE if array is not an array.
 * @throws Throwable E_WARNING if array is not an array.
 */

$input_array = array("FirSt" => 1, "SecOnd" => 4);
var_dump(array_change_key_case($input_array, CASE_UPPER));
var_dump(array_change_key_case($input_array, CASE_LOWER));