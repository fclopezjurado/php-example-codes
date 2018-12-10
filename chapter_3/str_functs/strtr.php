<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:31
 *
 * Translate characters or replace substrings.
 * http://php.net/manual/en/function.strtr.php
 * If given three arguments, this function returns a copy of str where all occurrences of each (single-byte) character
 * in from have been translated to the corresponding character in to, i.e., every occurrence of $from[$n] has been
 * replaced with $to[$n], where $n is a valid offset in both arguments.
 * If from and to have different lengths, the extra characters in the longer of the two are ignored. The length of str
 * will be the same as the return value's.
 * If given two arguments, the second should be an array in the form array('from' => 'to', ...). The return value is a
 * string where all the occurrences of the array keys have been replaced by the corresponding values. The longest keys
 * will be tried first. Once a substring has been replaced, its new value will not be searched again.
 * In this case, the keys and the values may have any length, provided that there is no empty key; additionally, the
 * length of the return value may differ from that of str. However, this function will be the most efficient when all
 * the keys have the same size.
 * @param string $str the string being translated.
 * @param string $from the string being translated to to.
 * @param string $to the string replacing from.
 * @param string $replace_pairs may be used instead of to and from, in which case it's an array in the form
 * array('from' => 'to', ...).
 * @return string returns the translated string. If replace_pairs contains a key which is an empty string (""),
 * FALSE will be returned. If the str is not a scalar then it is not typecasted into a string, instead a warning is
 * raised and NULL is returned.
 */

// In this form, strtr() does byte-by-byte translation. Therefore, we are assuming a single-byte encoding here:
var_dump(strtr('example äåö string', 'äåö', 'aao'));

var_dump(strtr('hi all, I said hello', array('h' => '-', 'hello' => 'hi', 'hi' => 'hello')));
var_dump(strtr('baab', 'ab', '01'));
var_dump(strtr('baab', array('ab' => '01')));
var_dump(strtr('example phrase', 'hra', 'jy'));
var_dump(strtr('example phrase', 'hra', 'jykw'));
var_dump(strtr('baab', array('' => '01')));
var_dump(strtr(array(454546456), array('' => '01')));