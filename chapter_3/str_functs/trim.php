<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * Strip whitespace (or other characters) from the beginning and end of a string.
 * http://php.net/manual/en/function.trim.php
 * This function returns a string with whitespace stripped from the beginning and end of str. Without the second
 * parameter (by default), trim() will strip these characters:
 * " " (ASCII 32 (0x20)), an ordinary space.
 * "\t" (ASCII 9 (0x09)), a tab.
 * "\n" (ASCII 10 (0x0A)), a new line (line feed).
 * "\r" (ASCII 13 (0x0D)), a carriage return.
 * "\0" (ASCII 0 (0x00)), the NUL-byte.
 * "\x0B" (ASCII 11 (0x0B)), a vertical tab.
 * @param string $str the string that will be trimmed.
 * @param string $character_mask optionally, the stripped characters can also be specified using the character_mask
 * parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
 * NOTE: Possible gotcha: removing middle characters because trim() trims characters from the beginning and end of a
 * string, it may be confusing when characters are (or are not) removed from the middle. trim('abc', 'bad') removes
 * both 'a' and 'b' because it trims 'a' thus moving 'b' to the beginning to also be trimmed. So, this is why it
 * "works" whereas trim('abc', 'b') seemingly does not.
 */

$fruit = array('apple','banana ', ' cranberry ');

function trim_value(&$value)
{
    $value = trim($value);
}

var_dump(trim("\t\tThese are a few words :) ...  "));
var_dump(trim("\t\tThese are a few words :) ...  ", " \t."));
var_dump(trim('Hello World', "Hdle"));
var_dump(trim('Hello World', 'HdWr'));

// trim the ASCII control characters at the beginning and end of $binary (from 0 to 31 inclusive)
var_dump(trim("\x09Example string\x0A", "\x00..\x1F"));

array_walk($fruit, 'trim_value');
var_dump($fruit);