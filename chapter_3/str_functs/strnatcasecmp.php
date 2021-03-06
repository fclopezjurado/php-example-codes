<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:27
 *
 * int strnatcasecmp ( string $str1 , string $str2 )
 *
 * Case insensitive string comparisons using a "natural order" algorithm.
 * http://php.net/manual/en/function.strnatcasecmp.php
 * This function implements a comparison algorithm that orders alphanumeric strings in the way a human being would. The
 * behaviour of this function is similar to strnatcmp(), except that the comparison is not case sensitive. For more
 * information see: Martin Pool's » Natural Order String Comparison page.
 * @param string $str1 the first string.
 * @param string $str2 the second string.
 * @return int similar to other string comparison functions, this one returns < 0 if str1 is less than str2 > 0 if
 * str1 is greater than str2, and 0 if they are equal.
 */

$arr1 = array('img12.png', 'img10.png', 'Img2.png', 'img1.png');

var_dump(strnatcasecmp('img1.png', 'Img1.png'));
var_dump(strnatcasecmp('img2.png', 'Img1.png'));
var_dump(strnatcasecmp('img1.png', 'Img2.png'));

usort($arr1, 'strcmp');
var_dump($arr1);
usort($arr1, 'strnatcmp');
var_dump($arr1);
usort($arr1, 'strnatcasecmp');
var_dump($arr1);