<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * Calculates the similarity between two strings as described in Programming Classics: Implementing the World's Best
 * Algorithms by Oliver (ISBN 0-131-00413-1). Note that this implementation does not use a stack as in Oliver's pseudo
 * code, but recursive calls which may or may not speed up the whole process. Note also that the complexity of this
 * algorithm is O(N**3) where N is the length of the longest string.
 * http://php.net/manual/en/function.similar-text.php
 * @param string $first the first string.
 * @param string $second the second string.
 * @param float $percent by passing a reference as third argument, similar_text() will calculate the similarity in
 * percent, by dividing the result of similar_text() by the average of the lengths of the given strings times 100.
 * @return int the number of matching chars in both strings. The number of matching characters is calculated by
 * finding the longest first common substring, and then doing this for the prefixes and the suffixes, recursively.
 * The lengths of all found common substrings are added.
 */

$percent = 71.428571428571;
$sim = similar_text('bafoobar', 'barfoo', $percent);
var_dump("similarity: $sim ($percent %)");
$percent = 71.857142857143;
$sim = similar_text('barfoo', 'bafoobar', $percent);
var_dump("similarity: $sim ($percent %)");

$var_1 = 'PHP IS GREAT';
$var_2 = 'WITH MYSQL';
$sim = similar_text($var_1, $var_2, $percent);
var_dump("similarity: $sim ($percent %)");
$sim = similar_text($var_2, $var_1, $percent);
var_dump("similarity: $sim ($percent %)");
var_dump(similar_text($var_1, $var_2));
var_dump(similar_text($var_2, $var_1));