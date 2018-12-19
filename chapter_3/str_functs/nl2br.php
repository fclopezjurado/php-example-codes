<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:21
 *
 * string nl2br ( string $string [, bool $is_xhtml = TRUE ] )
 *
 * Inserts HTML line breaks before all newlines in a string. Returns string with <br /> or <br> inserted before all
 * newlines (\r\n, \n\r, \n and \r).
 * http://php.net/manual/en/function.nl2br.php
 * @param string $string the input string.
 * @param bool $is_xhtml whether to use XHTML compatible line breaks or not.
 * @return string the altered string.
 */

var_dump(nl2br("foo isn't\n bar"));
var_dump(nl2br("Welcome\r\nThis is my HTML document", false));
var_dump(nl2br("This\r\nis\n\ra\nstring\r"));
var_dump(nl2br("Welcome\r\nThis is my HTML document", true));