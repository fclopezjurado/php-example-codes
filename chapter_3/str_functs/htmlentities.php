<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:18
 *
 * Convert all applicable characters to HTML entities.
 * http://php.net/manual/en/function.htmlentities.php
 * This function is identical to "htmlspecialchars()" in all ways, except with htmlentities(), all characters which
 * have HTML character entity equivalents are translated into these entities. If you want to decode instead
 * (the reverse) you can use html_entity_decode().
 * @param string the input string.
 * @param int $flags a bit mask of one or more of the following flags, which specify how to handle quotes and which
 * document type to use. The default is ENT_COMPAT | ENT_HTML401.
 * @param string $encoding an optional argument defining the encoding used when converting characters.
 * @param bool $double_encode when is turned off PHP will not encode existing html entities. The default
 * is to convert everything.
 * @return string the decoded string.
 */

$str = "A 'quote' is <b>bold</b>";
var_dump(htmlentities($str, ENT_QUOTES));
$str = "\x8F!!!";
var_dump(htmlentities($str, ENT_QUOTES, "UTF-8"));
var_dump(htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8"));
