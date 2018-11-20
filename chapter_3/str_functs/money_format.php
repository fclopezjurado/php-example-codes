<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:20
 *
 * Formats a number as a currency string.
 * http://php.net/manual/en/function.money-format.php
 * Returns a formatted version of number. This function wraps the C library function "strfmon()", with the difference
 * that this implementation converts only one number at a time.
 * @param string $format the format specification (documented in notes).
 * @param float $number the number to be formatted.
 * @return string the formatted string. Characters before and after the formatting string will be returned unchanged.
 * Non-numeric number causes returning NULL and emitting E_WARNING.
 * NOTE: This function is only defined if the system has "strfmon" capabilities. For example, Windows does not, so
 * "money_format()" is undefined in Windows.
 * NOTE: The LC_MONETARY category of the locale settings, affects the behavior of this function. Use "setlocale()" to
 * set to the appropriate default locale before using this function.
 */

$number = 1234.56;

// let's print the international format for the en_US locale
setlocale(LC_MONETARY, 'en_US');
var_dump(money_format('%i', $number)); // USD 1,234.56

// Italian national format with 2 decimals`
setlocale(LC_MONETARY, 'it_IT');
var_dump(money_format('%.2n', $number)); // Eu 1.234,56

// Using a negative number
$number = -1234.5672;

// US national format, using () for negative numbers and 10 digits for left precision
setlocale(LC_MONETARY, 'en_US');
var_dump(money_format('%(#10n', $number)); // ($        1,234.57)

// Similar format as above, adding the use of 2 digits of right precision and '*' as a fill character
var_dump(money_format('%=*(#10.2n', $number)); // ($********1,234.57)

// Let's justify to the left, with 14 positions of width, 8 digits of left precision, 2 of right precision, without
// grouping character and using the international format for the de_DE locale.
setlocale(LC_MONETARY, 'de_DE');
var_dump(money_format('%=*^-14#8.2i', 1234.56)); // Eu 1234,56****

// Let's add some blurb before and after the conversion specification
setlocale(LC_MONETARY, 'en_GB');
$fmt = 'The final value is %i (after a 10%% discount)';
var_dump(money_format($fmt, 1234.56)); // The final value is GBP 1,234.56 (after a 10% discount)