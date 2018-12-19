<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * array str_getcsv ( string $input [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]] )
 *
 * Parse a CSV string into an array.
 * http://php.net/manual/en/function.str-getcsv.php
 * Parses a string input for fields in CSV format and returns an array containing the fields read.
 * NOTE: The locale settings are taken into account by this function. If LC_CTYPE is e.g. en_US.UTF-8, strings in
 * one-byte encodings may be read wrongly by this function.
 * @param string $input the string to parse.
 * @param string $delimiter set the field delimiter (one character only).
 * @param string $enclosure set the field enclosure character (one character only).
 * @param string $escape set the escape character (one character only). Defaults as a backslash (\).
 * NOTE: Usually an enclosure character is escaped inside a field by doubling it; however, the escape character can be
 * used as an alternative. So for the default parameter values "" and \" have the same meaning. Other than allowing to
 * escape the enclosure character the escape character has no special meaning; it isn't even meant to escape itself.
 * @return [] returns an indexed array containing the fields read.
 */

var_dump(str_getcsv('red;blue;"dark orange";green', ";", '"'));
var_dump(str_getcsv('red,blue,y\ellow,"green"', ',', '"'));