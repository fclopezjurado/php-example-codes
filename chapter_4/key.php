<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 14/01/19
 * Time: 17:53
 *
 * key ( array $array ) : mixed
 *
 * Returns the index element of the current array position.
 * http://php.net/manual/en/function.key.php
 * @param array $array the array.
 * @return mixed the key of the array element that's currently being pointed to by the internal pointer. It does not
 * move the pointer in any way. If the internal pointer points beyond the end of the elements list or the array is
 * empty, key() returns NULL.
 */

$array = ['fruit1' => 'apple', 'fruit2' => 'orange', 'fruit3' => 'grape', 'fruit4' => 'apple', 'fruit5' => 'apple'];
var_dump(key($array));