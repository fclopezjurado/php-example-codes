<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:46
 *
 * array_splice ( array &$input , int $offset [, int $length = count($input) [, mixed $replacement = array() ]] ) : array
 *
 * Removes the elements designated by offset and length from the input array, and replaces them with the elements of
 * the replacement array, if supplied. Note that numeric keys in input are not preserved.
 * NOTE: If replacement is not an array, it will be typecast to one (i.e. (array) $replacement). This may result in
 * unexpected behavior when using an object or NULL replacement.
 * http://php.net/manual/en/function.array-splice.php
 * @param array $input the input array.
 * @param int $offset if offset is positive then the start of removed portion is at that offset from the beginning of
 * the input array. If offset is negative then it starts that far from the end of the input array.
 * @param int $length if length is omitted, removes everything from offset to the end of the array. If length is
 * specified and is positive, then that many elements will be removed. If length is specified and is negative then the
 * end of the removed portion will be that many elements from the end of the array. If length is specified and is
 * zero, no elements will be removed. Tip: to remove everything from offset to the end of the array when replacement
 * is also specified, use count($input) for length.
 * @param mixed $replacement if replacement array is specified, then the removed elements are replaced with elements
 * from this array.
 * If offset and length are such that nothing is removed, then the elements from the replacement array are inserted in
 * the place specified by the offset. Note that keys in replacement array are not preserved.
 * If replacement is just one element it is not necessary to put array() around it, unless the element is an array
 * itself, an object or NULL.
 * @return array consisting of the extracted elements.
 */

$input = ['red', 'green', 'blue', 'yellow'];
var_dump(array_splice($input, 2));
var_dump(array_splice($input, 1, -1));
var_dump(array_splice($input, 1, count($input), 'orange'));
var_dump(array_splice($input, -1, 1, ['black', 'maroon']));
var_dump(array_splice($input, 3, 0, 'purple'));