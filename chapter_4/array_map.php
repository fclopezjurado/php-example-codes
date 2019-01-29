<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:42
 *
 * array_map ( callable $callback , array $array1 [, array $... ] ) : array
 *
 * Returns an array containing all the elements of array1 after applying the callback function to each one.
 * The number of parameters that the callback function accepts should match the number of arrays passed to the
 * array_map().
 * http://php.net/manual/en/function.array-map.php
 * @param callable $callback function to run for each element in each array.
 * @param array $array1 an array to run through the callback function.
 * @param array variadic ... variable list of array arguments to run through the callback function.
 * @return array containing all the elements of array1 after applying the callback function to each one.
 */

# array_map() example

$a = [1, 2, 3, 4, 5];

/**
 * @param $n
 * @return float|int
 */
function cube($n)
{
    return($n * $n * $n);
}

var_dump(array_map('cube', $a));

# array_map() using a lambda function (as of PHP 5.3.0)

$func = function($value) {
    return $value * 2;
};

var_dump(array_map($func, range(1, 5)));

#array_map() - using more arrays

function show_Spanish($n, $m)
{
    return "The number $n is called $m in Spanish";
}

function map_Spanish($n, $m)
{
    return(array($n => $m));
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
var_dump(array_map('show_Spanish', $a, $b));
var_dump(array_map('map_Spanish', $a , $b));

# Creating an array of arrays

$a = [1, 2, 3, 4, 5];
$b = ["one", "two", "three", "four", "five"];
$c = ["uno", "dos", "tres", "cuatro", "cinco"];

var_dump(array_map(null, $a, $b, $c));

# array_map() - with string keys

$arr = ["stringkey" => "value"];

function cb1($a) {
    return array ($a);
}
function cb2($a, $b) {
    return array ($a, $b);
}

var_dump(array_map('cb1', $arr));
var_dump(array_map('cb2', $arr, $arr));
var_dump(array_map(null,  $arr));
var_dump(array_map(null, $arr, $arr));