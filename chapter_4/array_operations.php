<?php

$firstArray = ['one' => 'hello', 'two' => 'world'];
$secondArray = ['one' => 'goodbye', 'three' => 'cruel'];
$thirdArray = ['two' => 'world', 'one' => 'hello'];
$forthArray = ['one' => 'hello', 'two' => 'world'];

/**
 * $secondArray is appended to $firstArray. If a key exists in both arrays,
 * then the value from $a is placed into the union.
 */
var_dump($firstArray + $secondArray);

/**
 * TRUE if $firstArray and $thirdArray have the same key-value pairs
 */
var_dump($firstArray == $thirdArray);

/**
 * TRUE if $firstArray and $forthArray have the same key-value pairs, of
 * the same types, and in the same order.
 */
var_dump($firstArray === $forthArray);

/**
 * TRUE if $firstArray is not equal to $secondArray.
 */
var_dump($firstArray != $secondArray);

/**
 * TRUE if firstArray is not equal to $secondArray.
 */
var_dump($firstArray <> $secondArray);

/**
 * TRUE if $firstArray is not identical to $thirdArray
 */
var_dump($firstArray !== $thirdArray);