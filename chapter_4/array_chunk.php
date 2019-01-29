<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 16:46
 *
 * array_chunk ( array $array , int $size [, bool $preserve_keys = FALSE ] ) : array
 *
 * Split an array into chunks.
 * http://php.net/manual/en/function.array-chunk.php
 * Chunks an array into arrays with size elements. The last chunk may contain less than size elements.
 * @param array $array the array to work on
 * @param int $size the size of each chunk.
 * @param bool $preserve_keys when set to TRUE keys will be preserved. Default is FALSE which will reindex the chunk
 * numerically
 * @return array a multidimensional numerically indexed array, starting with zero, with each dimension containing size
 * elements.
 * @throws Throwable if size is less than 1 E_WARNING will be thrown and NULL returned.
 */

$input_array = array('first' => 'a', 'second' => 'b', 'third' => 'c', 'fourth' => 'd', 'fifth' => 'e');
var_dump(array_chunk($input_array, 2));
var_dump(array_chunk($input_array, 2, true));