<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:32
 *
 * Wraps a string to a given number of characters.
 * http://php.net/manual/en/function.wordwrap.php
 * Wraps a string to a given number of characters using a string break character.
 * @param string $str the input string.
 * @param int $width the number of characters at which the string will be wrapped.
 * @param string $break the line is broken using the optional break parameter.
 * @param bool $cut if the cut is set to TRUE, the string is always wrapped at or before the specified width.
 * So if you have a word that is larger than the given width, it is broken apart. (See second example).
 * When FALSE the function does not split the word even if the width is smaller than the word width.
 */

var_dump(wordwrap('The quick brown fox jumped over the lazy dog.', 20, "<br />\n"));
var_dump(wordwrap('A very long woooooooooooord.', 8, "\n", true));
var_dump(wordwrap('A very long woooooooooooooooooord. and something', 8, "\n", false));