<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:20
 *
 * string metaphone ( string $str [, int $phonemes = 0 ] )
 *
 * Calculates the metaphone key of str.
 * Similar to "soundex()", metaphone creates the same key for similar sounding words. It's more accurate than
 * "soundex()" as it knows the basic rules of English pronunciation. The metaphone generated keys are of variable
 * length.
 * http://php.net/manual/en/function.metaphone.php
 * @param string $str the input string
 * @param int $phonemes this parameter restricts the returned metaphone key to phonemes characters in length. The
 * default value of 0 means no restriction.
 * @return string|bool the metaphone key as a string, or false on failure.
 */

var_dump(metaphone('programming'));
var_dump(metaphone('programmer'));
var_dump(metaphone('programming', 5));
var_dump(metaphone('programmer', 5));
var_dump(metaphone(563563));
var_dump(metaphone(true));