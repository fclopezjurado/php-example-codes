<?php
/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:24
 *
 * Case-insensitive version of str_replace().
 * http://php.net/manual/en/function.str-ireplace.php
 * Returns a string or an array with all occurrences of search in subject (ignoring case) replaced with the given
 * replace value. If you don't need fancy replacing rules, you should generally use this function instead of
 * preg_replace() with the i modifier.
 * If search and replace are arrays, then "str_ireplace()" takes a value from each array and uses them to search and
 * replace on subject. If replace has fewer values than search, then an empty string is used for the rest of
 * replacement values. If search is an array and replace is a string, then this replacement string is used for every
 * value of search. The converse would not make sense, though.
 * If search or replace are arrays, their elements are processed first to last.
 * @param string[]|string $search the value being searched for, otherwise known as the needle. An array may be used to
 * designate multiple needles.
 * @param string[]|string $replace the replacement value that replaces found search values. An array may be used to
 * designate multiple replacements.
 * @param string|string $subject the string or array being searched and replaced on, otherwise known as the haystack.
 * If subject is an array, then the search and replace is performed with every entry of subject, and the return value
 * is an array as well.
 * @param int $count if passed, this will be set to the number of replacements performed.
 * @return string[]|string an string or an array of replacements.
 * NOTE: This function is binary-safe.
 */

$str_rep1 = 'A tutorial for learning str_ireplace function in PHP!';
$str_rep2 = 'A tutorial for learning system.out.println function in Java!';

var_dump(str_ireplace("%body%", "black", "<body text=%BODY%>"));
var_dump(str_ireplace('WORLD','Peter','Hello world!'));
var_dump(str_ireplace(['For', 'str_ireplace', 'Php'],['at', 'str_replace', 'Java'], $str_rep1));
var_dump(str_ireplace(['tutorial', 'function'], ['documentation', 'method'], [$str_rep1, $str_rep2]));
var_dump(str_ireplace(['tutorial', 'function', 'for'], ['documentation', 'method'], [$str_rep1, $str_rep2]));
var_dump(str_ireplace(['tutorial'], ['documentation', 'method'], [$str_rep1, $str_rep2]));