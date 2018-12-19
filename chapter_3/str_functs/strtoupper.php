<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:30
 *
 * string strtoupper ( string $string )
 *
 * Make a string uppercase.
 * http://php.net/manual/en/function.strtoupper.php
 * Returns string with all alphabetic characters converted to uppercase. Note that 'alphabetic' is determined by the
 * current locale. For instance, in the default "C" locale characters such as umlaut-a (ä) will not be converted.
 * @param string $string the input string.
 * @return string the uppercased string.
 */

var_dump(strtoupper('Mary Had A Little Lamb and She LOVED It So'));