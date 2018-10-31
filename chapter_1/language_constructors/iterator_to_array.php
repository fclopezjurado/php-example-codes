<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 23/10/18
 * Time: 13:21
 *
 * Copy the iterator into an array.
 * https://secure.php.net/manual/en/function.iterator-to-array.php
 * "use_keys" attribute: NULL keys will be converted to an empty string, float keys will be truncated to their integer
 * counterpart, resource keys will generate a warning and be converted to their resource ID, and boolean keys will be
 * converted to integers.
 *
 * NOTE: If this parameter is not set or set to TRUE, duplicate keys will be overwritten. The last value with a given
 * key will be in the returned array. Set this parameter to FALSE to get all the values in any case.
 */

$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour'));
var_dump(iterator_to_array($iterator, true));
var_dump(iterator_to_array($iterator, false));
