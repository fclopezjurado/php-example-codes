<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:24
 *
 * string str_repeat ( string $input , int $multiplier )
 *
 * Repeat an string.
 * http://php.net/manual/en/function.str-repeat.php
 * Returns input repeated multiplier times.
 * @param string $input the string to be repeated.
 * @param int $multiplier number of time the input string should be repeated. multiplier has to be greater than or
 * equal to 0. If the multiplier is set to 0, the function will return an empty string.
 * @return string the repeated string.
 */

var_dump(str_repeat('-=', 10));
var_dump(str_repeat('-=', 0));