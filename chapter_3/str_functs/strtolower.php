<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:30
 *
 * string strtolower ( string $string )
 *
 * Make a string lowercase.
 * http://php.net/manual/en/function.strtolower.php
 * Returns string with all alphabetic characters converted to lowercase. Note that 'alphabetic' is determined by the
 * current locale. This means that e.g. in the default "C" locale, characters such as umlaut-A (Ä) will not be
 * converted.
 * @param string $string the input string.
 * @return string the lowercased string.
 */

var_dump(strtolower('Mary Had A Little Lamb and She LOVED It So'));