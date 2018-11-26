<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:21
 *
 * Format a number with grouped thousands. This function accepts either one, two, or four parameters (not three):
 * If only one parameter is given, number will be formatted without decimals, but with a comma (",") between every
 * group of thousands.
 * If two parameters are given, number will be formatted with decimals decimals with a dot (".") in front, and a comma
 * (",") between every group of thousands.
 * If all four parameters are given, number will be formatted with decimals decimals, dec_point instead of a dot (".")
 * before the decimals and thousands_sep instead of a comma (",") between every group of thousands.
 * http://php.net/manual/en/function.number-format.php
 * @param float $number the number being formatted.
 * @param int $decimals sets the number of decimal points.
 * @param string $dec_point sets the separator for the decimal point. "." by default.
 * @param string $thousands_sep sets the thousands separator.
 * @return string a formatted version of number.
 */

//english notation (default)
var_dump(number_format(1234.56)); // 1,235

// French notation
var_dump(number_format(1234.56, 2, ',', ' '));// 1 234,56

// english notation without thousands separator
var_dump(number_format(1234.5678, 2, '.', '')); // 1234.57