<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:39
 *
 * string mb_convert_variables ( string $to_encoding , mixed $from_encoding , mixed &$vars [, mixed &$... ] )
 *
 * Convert character code in variable(s).
 * http://php.net/manual/en/function.mb-convert-variables.php
 * Converts character encoding of variables vars in encoding from_encoding to encoding to_encoding.
 * mb_convert_variables() join strings in Array or Object to detect encoding, since encoding detection tends to fail
 * for short strings. Therefore, it is impossible to mix encoding in single array or object.
 * @param string $to_encoding the encoding that the string is being converted to.
 * @param mixed $from_encoding is specified as an array or comma separated string, it tries to detect encoding from
 * from-coding. When from_encoding is omitted, detect_order is used.
 * @param mixed $vars is the reference to the variable being converted. String, Array and Object are accepted.
 * mb_convert_variables() assumes all parameters have the same encoding.
 * @param ... Additional vars.
 * @return string|bool the character encoding before conversion for success, or FALSE for failure.
 */

// Convert variables $post1, $post2 to internal encoding.
$post1 = 'hello';
$post2 = '中国';
var_dump(mb_convert_variables(mb_internal_encoding(), "ASCII,UTF-8,SJIS-win", $post1, $post2));
var_dump($post1);
var_dump($post2);