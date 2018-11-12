<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:15
 *
 * Generates the cyclic redundancy checksum polynomial of 32-bit lengths of the str. This is usually used to validate
 * the integrity of data being transmitted.
 * http://php.net/manual/en/function.crc32.php
 * Because PHPs integer type is signed many crc32 check-sums will result in negative integers on 32bit platforms. On
 * 64bit installations all crc32() results will be positive integers though.
 * So you need to use the "%u" formatter of sprintf() or printf() to get the string representation of the unsigned
 * crc32() checksum in decimal format.
 * For a hexadecimal representation of the checksum you can either use the "%x" formatter of sprintf() or printf() or
 * the dechex() conversion functions, both of these also take care of converting the crc32() result to an unsigned
 * integer.
 * Having 64bit installations also return negative integers for higher result values was considered but would break the
 * hexadecimal conversion as negatives would get an extra 0xFFFFFFFF######## offset then. As hexadecimal representation
 * seems to be the most common use case we decided to not break this even if it breaks direct decimal comparisons in
 * about 50% of the cases when moving from 32 to 64bits.
 * In retrospect having the function return an integer maybe wasn't the best idea and returning a hex string
 * representation right away (as e.g. md5() does) might have been a better plan to begin with.
 * For a more portable solution you may also consider the generic hash(). hash("crc32b", $str) will return the same
 * string as str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT).
 * @param string $str the data.
 * @return int the crc32 checksum of str as an integer.
 */

$checksum = crc32('The quick brown fox jumped over the lazy dog.');
printf("%u\n", $checksum);