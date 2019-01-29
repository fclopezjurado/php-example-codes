<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:44
 *
 * array_rand ( array $array [, int $num = 1 ] ) : mixed
 *
 * Picks one or more random entries out of an array, and returns the key (or keys) of the random entries. It uses a
 * pseudo random number generator that is not suitable for cryptographic purposes.
 * @param array $array the input array.
 * @param int $num specifies how many entries should be picked.
 * @return mixed when picking only one entry, array_rand() returns the key for a random entry. Otherwise, an array of
 * keys for the random entries is returned. This is done so that random keys can be picked from the array as well as
 * random values. Trying to pick more elements than there are in the array will result in an E_WARNING level error,
 * and NULL will be returned.
 */

$input = ['Neo', 'Morpheus', 'Trinity', 'Cypher', 'Tank'];
var_dump(array_rand($input, 2));
var_dump($input);