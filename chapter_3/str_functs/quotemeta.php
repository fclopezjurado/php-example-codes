<?php
/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:22
 *
 * Quote meta characters.
 * http://php.net/manual/en/function.quotemeta.php
 * Returns a version of str with a backslash character (\) before every character that is among
 * these: ". \ + * ? [ ^ ] ( $ )"
 * @param string $str the input string.
 * @return string with meta characters quoted, or FALSE if an empty string is given as str.
 * NOTE: This function is binary-safe.
 */

var_dump(quotemeta('string with a dot: .'));
var_dump(quotemeta('string with a backslash: \\'));
var_dump(quotemeta('string with a plus char: .'));
var_dump(quotemeta('string with a asterisk: *'));
var_dump(quotemeta('string with a question mark: ?'));
var_dump(quotemeta('string with a open bracket: ['));
var_dump(quotemeta('string with a hat char: ^'));
var_dump(quotemeta('string with a close bracket: ]'));
var_dump(quotemeta('string with a open parenthesis: ('));
var_dump(quotemeta('string with a dollar char: $'));
var_dump(quotemeta('string with a close parenthesis: )'));