<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:21
 *
 * Parses the string into variables.
 * Parses encoded_string as if it were the query string passed via a URL and sets variables in the current scope
 * (or in the array if result is provided).
 * http://php.net/manual/en/function.parse-str.php
 * @param string $encoded_string the input string.
 * @param [] result if the second parameter result is present, variables are stored in this variable as array elements
 * instead.
 * NOTE: Using this function without the result parameter is highly DISCOURAGED and DEPRECATED as of PHP 7.2.
 * NOTE: All variables created (or values returned into array if second parameter is set) are already urldecode()d.
 * NOTE: To get the current QUERY_STRING, you may use the variable $_SERVER['QUERY_STRING']. Also, you may want to
 * read the section on variables from external sources.
 * NOTE: The magic_quotes_gpc setting affects the output of this function, as parse_str() uses the same mechanism that
 * PHP uses to populate the $_GET, $_POST, etc. variables.
 * @return void no value is returned.
 */

$first = null;
$My_Value = null;
$str = "first=value&arr[]=foo+bar&arr[]=baz";

// Recommended
parse_str($str, $output);
var_dump($output['first']); // value
var_dump($output['arr'][0]); // foo bar
var_dump($output['arr'][1]); // baz

// DISCOURAGED
parse_str($str);
var_dump($first); // value
var_dump($arr[0]); // foo bar
var_dump($arr[1]); // baz

parse_str("My Value=Something");
var_dump($My_Value); // Something
parse_str("My Value=Something", $output);
var_dump($output['My_Value']); // Something