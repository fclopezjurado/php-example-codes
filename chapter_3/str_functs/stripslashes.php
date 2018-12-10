<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:26
 *
 * Un-quotes a quoted string.
 * http://php.net/manual/en/function.stripslashes.php
 * An example use of "stripslashes()" is when the PHP directive magic_quotes_gpc is on (it was on by default before
 * PHP 5.4), and you aren't inserting this data into a place (such as a database) that requires escaping. For example,
 * if you're simply outputting data straight from an HTML form.
 * @param string $str the input string.
 * @return string with backslashes stripped off. (\' becomes ' and so on.) Double backslashes (\\) are made into a
 * single backslash (\).
 */

$array = array('f\\\'oo', 'b\\\'ar', array('fo\\\'o', 'b\\\'ar'));

function stripslashes_deep($value)
{
    $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    return $value;
}

var_dump(stripslashes('Is your name O\\\'reilly?'));
var_dump(stripslashes_deep($array));

/**
 * stripslashes does not recognize C special chars like \n, \r, etc.
 */
var_dump(stripslashes('\n'));
var_dump(stripslashes('He\xallo'));
var_dump(stripslashes('H\xaello'));
var_dump(stripslashes('H\xa0ello'));

var_dump(stripslashes('\f\o\o\[ \]'));
var_dump(stripslashes('\zoo\[\'.\'\]'));