<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * Find length of initial segment not matching mask.
 * http://php.net/manual/en/function.strcspn.php
 * Returns the length of the initial segment of subject which does not contain any of the characters in mask.
 * If start and length are omitted, then all of subject will be examined. If they are included, then the effect will be
 * the same as calling strcspn(substr($subject, $start, $length), $mask) (see substr for more information).
 * @param string $subject the string to examine.
 * @param string $mask The string containing every disallowed character.
 * @param int $start the position in subject to start searching. If start is given and is non-negative, then strcspn()
 * will begin examining subject at the start'th position. For instance, in the string 'abcdef', the character at
 * position 0 is 'a', the character at position 2 is 'c', and so forth. If start is given and is negative, then
 * strcspn() will begin examining subject at the start'th position from the end of subject.
 * @param int $length the length of the segment from subject to examine. If length is given and is non-negative, then
 * subject will be examined for length characters after the starting position. If length is given and is negative,
 * then subject will be examined from the starting position up to length characters from the end of subject.
 * @return int the length of the initial segment of subject which consists entirely of characters not in mask.
 * NOTE: When a start parameter is set, the returned length is counted starting from this position, not from the
 * beginning of subject.
 */

var_dump(strcspn('abcd',  'apple'));
var_dump(strcspn('abcd',  'banana'));
var_dump(strcspn('hello', 'l'));
var_dump(strcspn('hello', 'world'));
var_dump(strcspn('abcdhelloabcd', 'abcd', -9));
var_dump(strcspn('abcdhelloabcd', 'abcd', -9, -5));