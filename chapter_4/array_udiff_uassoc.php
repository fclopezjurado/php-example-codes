<?php

/**
 * created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:47
 *
 * array_udiff_uassoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ,
 * callable $key_compare_func ) : array
 *
 * Computes the difference of arrays with additional index check, compares data and indexes by a callback function.
 * Note that the keys are used in the comparison unlike array_diff() and array_udiff().
 * http://php.net/manual/en/function.array-udiff-uassoc.php
 * @param array $array1 the first array.
 * @param array $array2 the second array.
 * @param callable $value_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @param callable $key_compare_func the comparison of keys (indices) is done also by the callback function
 * key_compare_func. This behaviour is unlike what array_udiff_assoc() does, since the latter compares the indices by
 * using an internal function.
 * @return array containing all the values from array1 that are not present in any of the other arguments.
 */

class uCR
{
    private $private_member;

    function __construct($value)
    {
        $this->private_member = $value;
    }

    static function comp_func_ucr($a, $b)
    {
        return $a <=> $b;
    }

    static function comp_func_key($a, $b)
    {
        return $a <=> $b;
    }
}

$a = ['0.1' => new uCR(9), '0.5' => new uCR(12), 0 => new uCR(23), 1 => new uCR(4),
    2 => new uCR(-15)];
$b = ['0.2' => new uCR(9), '0.5' => new uCR(22), 0 => new uCR(3), 1 => new uCR(4),
    2 => new uCR(-15)];

var_dump(array_udiff_uassoc($a, $b, ['ucr', 'comp_func_ucr'], ['ucr', 'comp_func_key']));