<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:30
 *
 * Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.
 * http://php.net/manual/en/function.strspn.php
 * If start and length are omitted, then all of subject will be examined. If they are included, then the effect will
 * be the same as calling strspn(substr($subject, $start, $length), $mask) (see substr for more information).
 * @param string $subject the string to examine.
 * @param string $mask the list of allowable characters.
 * @param int $start the position in subject to start searching. If start is given and is non-negative, then strspn()
 * will begin examining subject at the start'th position. For instance, in the string 'abcdef', the character at
 * position 0 is 'a', the character at position 2 is 'c', and so forth. If start is given and is negative, then
 * strspn() will begin examining subject at the start'th position from the end of subject.
 * @param int $length the length of the segment from subject to examine. If length is given and is non-negative, then
 * subject will be examined for length characters after the starting position. If length is given and is negative,
 * then subject will be examined from the starting position up to length characters from the end of subject.
 * @return int the length of the initial segment of subject which consists entirely of characters in mask.
 * NOTE: When a start parameter is set, the returned length is counted starting from this position, not from the
 * beginning of subject.
 */

// subject does not start with any characters from mask.
var_dump(strspn('foo', 'o'));

// examine two characters from subject starting at offset 1.
var_dump(strspn('foo', 'o', 1, 2));

// examine one character from subject starting at offset 1.
var_dump(strspn('foo', 'o', 1, 1));

// examine 4 characters from the end of the string.
var_dump(strspn('example phrase', 'sear', -4, 4));

// example all characters from position 2 to string length - 4 positions.
var_dump(strspn('example phrase', 'pmxa', 2, -4));