<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:47
 *
 * array_udiff_assoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ) : array
 *
 * Computes the difference of arrays with additional index check, compares data by a callback function.
 * NOTE: Please note that this function only checks one dimension of a n-dimensional array. Of course you can check
 * deeper dimensions by using, for example, array_udiff_assoc($array1[0], $array2[0], "some_comparison_func");.
 * http://php.net/manual/en/function.array-udiff-assoc.php
 * @param array $array1 the first array.
 * @param array $array2 the second array.
 * @param callable $value_compare_func the comparison function must return an integer less than, equal to, or greater
 * than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
 * Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
 * callback ( mixed $a, mixed $b ) : int
 * @return array array_udiff_assoc() returns an array containing all the values from array1 that are not present in
 * any of the other arguments. Note that the keys are used in the comparison unlike array_diff() and array_udiff().
 * The comparison of arrays' data is performed by using an user-supplied callback. In this aspect the behaviour is
 * opposite to the behaviour of array_diff_assoc() which uses internal function for comparison.
 */

# array_udiff_assoc() example

/**
 * Class cr
 */
class cr
{
    private $private_member;

    function __construct($value)
    {
        $this->private_member = $value;
    }

    static function comp_func_cr($a, $b)
    {
        return $a <=> $b;
    }
}

$a = ['0.1' => new cr(9), '0.5' => new cr(12), 0 => new cr(23), 1 => new cr(4),
    2 => new cr(-15)];
$b = ['0.2' => new cr(9), '0.5' => new cr(22), 0 => new cr(3), 1 => new cr(4),
    2 => new cr(-15)];

var_dump(array_udiff_assoc($a, $b, ['cr', 'comp_func_cr']));
