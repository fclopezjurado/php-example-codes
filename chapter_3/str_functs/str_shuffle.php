<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:25
 *
 * string str_shuffle ( string $str )
 *
 * Randomly shuffles a string.
 * http://php.net/manual/en/function.str-shuffle.php
 * One permutation of all possible is created.
 * Caution. This function does not generate cryptographically secure values, and should not be used for cryptographic
 * purposes. If you need a cryptographically secure value, consider using random_int(), random_bytes(), or
 * openssl_random_pseudo_bytes() instead.
 * @param string $str the input string.
 * @return string the shuffled string.
 */

var_dump(str_shuffle('cryptographically secure value'));
var_dump(str_shuffle('randomly shuffles a string'));