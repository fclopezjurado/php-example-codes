<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:31
 *
 * mixed substr_replace ( mixed $string , mixed $replacement , mixed $start [, mixed $length ] )
 *
 * Replace text within a portion of a string.
 * http://php.net/manual/en/function.substr-replace.php
 * Replaces a copy of string delimited by the start and (optionally) length parameters with the string given in
 * replacement.
 * @param mixed $string the input string. An array of strings can be provided, in which case the replacements will
 * occur on each string in turn. In this case, the replacement, start and length parameters may be provided either as
 * scalar values to be applied to each input string in turn, or as arrays, in which case the corresponding array
 * element will be used for each input string.
 * @param mixed $replacement the replacement string.
 * @param mixed $start if start is non-negative, the replacing will begin at the start'th offset into string. If start
 * is negative, the replacing will begin at the start'th character from the end of string.
 * @param mixed $length if given and is positive, it represents the length of the portion of string which is to be
 * replaced. If it is negative, it represents the number of characters from the end of string at which to stop
 * replacing. If it is not given, then it will default to strlen( string ); i.e. end the replacing at the end of
 * string. Of course, if length is zero then this function will have the effect of inserting replacement into string
 * at the given start offset.
 * @return array|string the result string is returned. If string is an array then array is returned.
 */

// These two examples replace all of $string with 'bob'.
var_dump(substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 0));
var_dump(substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 0, strlen('ABCDEFGH:/MNRPQR/')));

// Insert 'bob' right at the beginning of 'ABCDEFGH:/MNRPQR/'.
var_dump(substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 0, 0));

/* These next two replace 'MNRPQR' in 'ABCDEFGH:/MNRPQR/' with 'bob'. */
var_dump(substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 10, -1));
var_dump(substr_replace('ABCDEFGH:/MNRPQR/', 'bob', -7, -1));

/* Delete 'MNRPQR' from 'ABCDEFGH:/MNRPQR/'. */
var_dump(substr_replace('ABCDEFGH:/MNRPQR/', '', 10, -1));

$input = array('A: XXX', 'B: XXX', 'C: XXX');
$replace = array('AAA', 'BBB', 'CCC');
$length = array(1, 2, 3);

// A simple case: replace XXX in each string with YYY.
var_dump(implode('; ', substr_replace($input, 'YYY', 3, 3)));

// A more complicated case where each replacement is different.
var_dump(implode('; ', substr_replace($input, $replace, 3, 3)));

// Replace a different number of characters each time.
var_dump(implode('; ', substr_replace($input, $replace, 3, $length)));

var_dump(substr_replace('eggs','x',-1,-1));
var_dump(substr_replace('eggs','x',-1,-2));
var_dump(substr_replace('eggs','x',-1,-2));
var_dump(substr_replace('eggs','x',-1,0));
var_dump(substr_replace('huevos','x',-2,-2));
var_dump(substr_replace('huevos','x',-2,-3));
var_dump(substr_replace('huevos','x',-2,-3));
var_dump(substr_replace('huevos','x',-2,0));
var_dump(substr_replace('abcd', 'x', 0, -4));
var_dump(substr_replace('abcd','x',0,0));
var_dump(substr_replace('abcd', 'x', 1, -3));
var_dump(substr_replace('abcd', 'x', 1, 0));