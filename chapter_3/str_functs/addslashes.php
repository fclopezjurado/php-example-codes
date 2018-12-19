<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:11
 *
 * string addslashes ( string $str )
 *
 * Returns a string with backslashes added before characters that need to be escaped. These characters are:
 * single quote ('), double quote ("), backslash (\), NUL (the NUL byte).
 * @param string $sr the string to be escaped.
 * @return string returns the escaped string.
 */

var_dump(addslashes('"Is your \name O\'Reilly?"'));