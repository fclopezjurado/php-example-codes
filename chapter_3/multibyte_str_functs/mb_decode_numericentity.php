<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:40
 *
 * Decode HTML numeric string reference to character.
 * http://php.net/manual/en/function.mb-decode-numericentity.php
 * Convert numeric string reference of string str in a specified block to character.
 * @param string $str the string being decoded.
 * @param array $convmap is an array that specifies the code area to convert.
 * @param string $encoding the encoding parameter is the character encoding. If it is omitted, the internal character
 * encoding value will be used.
 * @return string the converted string.
 */

$convmap = array(0x0, 0x2FFFF, 0, 0xFFFF);
var_dump(mb_decode_numericentity('&#8217; &#7936; &#226;', $convmap, 'UTF-8'));
var_dump(mb_encode_numericentity(' � � ', $convmap, 'UTF-8'));