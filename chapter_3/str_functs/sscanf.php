<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * mixed sscanf ( string $str , string $format [, mixed &$... ] )
 *
 * Parses input from a string according to a format.
 * http://php.net/manual/en/function.sscanf.php
 * Reads from the string $str and interprets it according to the specified format, which is described in the
 * documentation for sprintf(). Any whitespace in the format string matches any whitespace in the input string.
 * This means that even a tab \t in the format string can match a single space character in the input string.
 * @param string $str the input string being parsed.
 * @param string $format the interpreted format for str, which is described in the documentation for sprintf() in notes.
 * @param ... optionally pass in variables by reference that will contain the parsed values.
 * @return array|int if only two parameters were passed to this function, the values parsed will be returned as an
 * array. Otherwise, if optional parameters are passed, the function will return the number of assigned values.
 * The optional parameters must be passed by reference. If there are more substrings expected in the format than there
 * are available within str, -1 will be returned.
 */

$mandate = "January 01 2000";

list($serial) = sscanf("SN/2350001", "SN/%d"); // getting the serial number
list($month, $day, $year) = sscanf($mandate, "%s %d %d"); // and the date of manufacturing
var_dump("Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day");

$auth = "24\tLewis Carroll";
$n = sscanf($auth, "%d\t%s %s", $id, $first, $last);

var_dump("<author id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author>");