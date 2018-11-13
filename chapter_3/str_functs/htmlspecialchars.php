<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:18
 *
 * Convert special characters to HTML entities.
 * http://php.net/manual/en/function.htmlspecialchars.php
 * @param string the input string.
 * @param int $flags a bit mask of one or more of the following flags, which specify how to handle quotes and which
 * document type to use. The default is ENT_COMPAT | ENT_HTML401.
 * @param string $encoding an optional argument defining the encoding used when converting characters.
 * @param bool $double_encode when is turned off PHP will not encode existing html entities. The default
 * is to convert everything.
 * @return string the converted string. If the input string contains an invalid code unit sequence within the given
 * encoding an empty string will be returned, unless either the ENT_IGNORE or ENT_SUBSTITUTE flags are set.
 */

var_dump(htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES));
var_dump(htmlspecialchars("<a href='test'>Test&&&&&&</a>", ENT_QUOTES));
var_dump(htmlspecialchars("<a href='test'>Test&&&&&&</a>", ENT_QUOTES | ENT_HTML5));