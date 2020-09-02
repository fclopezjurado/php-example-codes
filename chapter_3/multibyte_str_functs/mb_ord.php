<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:47
 *
 * int mb_ord ( string $str [, string $encoding ] )
 *
 * Get code point of character.
 * http://php.net/manual/en/function.mb-ord.php
 * @param string $str stores characters to be translated to number of encoding table.
 * @param string encoding is the character encoding name used as reference to know what number corresponds in this
 * table to character given in $str parameter.
 * @return int|bool a code point of character or FALSE on failure.
 */

var_dump(mb_ord('~', 'ASCII'));
var_dump(mb_ord('á', 'UTF-8'));
var_dump(mb_ord('ä', 'UTF-16'));
var_dump(mb_ord('@', 'ISO-8859-2'));