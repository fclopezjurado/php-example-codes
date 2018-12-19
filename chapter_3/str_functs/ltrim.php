<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:19
 *
 * string ltrim ( string $str [, string $character_mask ] )
 *
 * Strip whitespace (or other characters) from the beginning of a string.
 * http://php.net/manual/en/function.ltrim.php
 * @param string $str the input string.
 * @param string $character_mask you can also specify the characters you want to strip, by means of the character_mask
 * parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
 * @return string with whitespace stripped from the beginning of str. Without the second parameter, ltrim() will strip
 * these characters:
 * " " (ASCII 32 (0x20)), an ordinary space.
 * "\t" (ASCII 9 (0x09)), a tab.
 * "\n" (ASCII 10 (0x0A)), a new line (line feed).
 * "\r" (ASCII 13 (0x0D)), a carriage return.
 * "\0" (ASCII 0 (0x00)), the NUL-byte.
 * "\x0B" (ASCII 11 (0x0B)), a vertical tab.
 */

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = 'Hello World';

var_dump($text, $binary, $hello);
var_dump(ltrim($text));
var_dump(ltrim($text, " \t."));
var_dump(ltrim($hello, "Hdle"));

/**
 * trim the ASCII control characters at the beginning of $binary (from 0 to 31 inclusive).
 */
var_dump(ltrim($binary, "\x00..\x1F"));