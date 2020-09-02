<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:12
 *
 * string rtrim ( string $str [, string $character_mask ] )
 *
 * This function returns a string with whitespace (or other characters) stripped from the end of the string.
 * http://php.net/manual/en/function.rtrim.php
 * @param string str the input string.
 * @param string character_mask you can also specify the characters you want to strip. Simply list all characters that
 * you want to be stripped. With .. you can specify a range of characters:
 * " " (ASCII 32 (0x20)), an ordinary space.
 * "\t" (ASCII 9 (0x09)), a tab.
 * "\n" (ASCII 10 (0x0A)), a new line (line feed).
 * "\r" (ASCII 13 (0x0D)), a carriage return.
 * "\0" (ASCII 0 (0x00)), the NULL-byte.
 * "\x0B" (ASCII 11 (0x0B)), a vertical tab.
 */

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = 'Hello World';
var_dump($text, $binary, $hello);

$trimmed = rtrim($text);
var_dump($trimmed);
$trimmed = rtrim($text, "\t.");
var_dump($trimmed);
$trimmed = rtrim($hello, 'Hdle');
var_dump($trimmed);

/**
 * trim the ASCII control characters at the end of $binary (from 0 to 31 inclusive).
 */
$clean = rtrim($binary, "\x00..\x1F");
var_dump($clean);