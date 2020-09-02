<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 16:46
 *
 * array_combine ( array $keys , array $values ) : array
 *
 * Creates an array by using the values from the keys array as keys and the values from the values array as the
 * corresponding values.
 * http://php.net/manual/en/function.array-combine.php#refsect1-function.array-combine-parameters
 * @param array $keys illegal values for key will be converted to string.
 * @param array $values array of values to be used.
 * @return array the combined array, FALSE if the number of elements for each array isn't equal.
 * @throws Throwable E_WARNING if the number of elements in keys and values does not match.
 */

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
var_dump(array_combine($a, $b));