<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 6/11/18
 * Time: 18:18
 */

/**
 * You can reference a position in a string by using either square brackets or curly braces.
 */
$hello = "world";
var_dump($hello[0]);
var_dump($hello{0});

/**
 * PHP warning if you attempt to write to a negative position of a string.
 */
$hello[-2] = 't';

/**
 * Writing to a position that is out of range will result in the string being padded with spaces to accommodate the
 * missing section.
 */
$hello[10] = "*";
var_dump($hello);
