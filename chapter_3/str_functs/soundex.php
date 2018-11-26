<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:23
 *
 * Calculate the soundex key of a string.
 * Soundex keys have the property that words pronounced similarly produce the same soundex key, and can thus be used
 * to simplify searches in databases where you know the pronunciation but not the spelling. This soundex function
 * returns a string 4 characters long, starting with a letter.
 * This particular soundex function is one described by Donald Knuth in 'The Art Of Computer Programming, vol. 3:
 * Sorting And Searching', Addison-Wesley (1973), pp. 391-392.
 * http://php.net/manual/en/function.soundex.php
 * @param string the input string.
 * @param string the soundex key as string.
 */

var_dump(soundex('Euler'));
var_dump(soundex('Ellery'));
var_dump(soundex('Euler') === soundex('Ellery'));

var_dump(soundex('Gauss'));
var_dump(soundex('Ghosh'));
var_dump(soundex('Gauss') === soundex('Ghosh'));

var_dump(soundex('Hilbert'));
var_dump(soundex('Heilbronn'));
var_dump(soundex('Hilbert') === soundex('Heilbronn'));

var_dump(soundex('Knuth'));
var_dump(soundex('Kant'));
var_dump(soundex('Knuth') === soundex('Kant'));

var_dump(soundex('Lloyd'));
var_dump(soundex('Ladd'));
var_dump(soundex('Lloyd') === soundex('Ladd'));

var_dump(soundex('Lukasiewicz'));
var_dump(soundex('Lissajous'));
var_dump(soundex('Lukasiewicz') === soundex('Lissajous'));