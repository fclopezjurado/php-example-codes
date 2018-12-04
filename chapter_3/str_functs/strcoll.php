<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * Locale based string comparison.
 * http://php.net/manual/en/function.strcoll.php
 * Note that this comparison is case sensitive, and unlike strcmp() this function is not binary safe.
 * strcoll() uses the current locale for doing the comparisons. If the current locale is C or POSIX, this function is
 * equivalent to strcmp().
 * @param string $str1 the first string.
 * @param string $str2 the second string.
 * @return int returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 */

setlocale(LC_COLLATE, 'C');
var_dump(strcoll('a', 'A'));
var_dump(strcoll('A', 'a'));
var_dump(strcoll('a', 'a'));
setlocale(LC_COLLATE, 'de_DE');
var_dump(strcoll('a', 'A'));
setlocale(LC_COLLATE, 'de_CH');
var_dump(strcoll('a', 'A'));
setlocale(LC_COLLATE, 'en_US');
var_dump(strcoll('a', 'A'));

$a = array ('a', 'A', '�', '�', 'b', 'B');

setlocale(LC_COLLATE, 'C');
usort($a, 'strcoll');
var_dump($a);

setlocale (LC_COLLATE, 'de_DE');
usort($a, 'strcoll');
var_dump($a);