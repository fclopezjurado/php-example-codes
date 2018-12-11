<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:46
 *
 * Executes the case insensitive regular expression match with multi byte support.
 * http://php.net/manual/en/function.mb-eregi.php
 * @param string $pattern the search pattern.
 * @param string $string the search string.
 * @param array $regs if matches are found for parenthesized substrings of pattern and the function is called with the
 * third argument regs, the matches will be stored in the elements of the array regs. If no matches are found, regs is
 * set to an empty array. $regs[1] will contain the substring which starts at the first left parenthesis; $regs[2]
 * will contain the substring starting at the second, and so on. $regs[0] will contain a copy of the complete string
 * matched.
 * @return int|bool the byte length of the matched string if a match for pattern was found in string, or FALSE if no
 * matches were found or an error occurred. If the optional parameter regs was not passed or the length of the matched
 * string is 0, this function returns 1.
 */

$regs = [];

mb_internal_encoding( 'UTF-8');
var_dump(mb_eregi( 'äpfel', 'Äpfel', $regs));
var_dump($regs);
var_dump(mb_eregi( 'äpfel', mb_strtolower('Äpfel'), $regs));
var_dump($regs);