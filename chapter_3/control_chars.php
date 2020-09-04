<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 6/11/18
 * Time: 17:06
 *
 * Control characters.
 * https://secure.php.net/manual/en/regexp.reference.escape.php#regexp.reference.escape
 */

var_dump("escape char: \e");
var_dump("form feed: \f");
var_dump("new line: \n");
var_dump("carriage return: \r");
var_dump("tabular char: \t");
var_dump("hexadecimal code: \x78");
var_dump("octal code: \040"); // \040 in octal is whitespace.
var_dump("unicode char: \u{1F418}");
var_dump("vertical tab: \v");
var_dump("backslash char: \\");
var_dump("space char: \040");
var_dump("space char: \40");
var_dump("back reference: \7");
var_dump("might be a back reference, or another way of writing a tab: \11");
var_dump("tab: \011");
var_dump("tab followed by character 3: \0113");
var_dump("character with octal code 113 (since there can be no more than 99 back references): \113");
var_dump("byte consisting entirely of 1 bits: \377");