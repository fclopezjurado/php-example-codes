<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:46
 *
 * Set/Get internal character encoding.
 * http://php.net/manual/en/function.mb-internal-encoding.php
 * @param string $encoding is the character encoding name used for the HTTP input character encoding conversion,
 * HTTP output character encoding conversion, and the default character encoding for string functions defined by the
 * mbstring module. You should notice that the internal encoding is totally different from the one for multibyte regex.
 * @return mixed if encoding is set, then Returns TRUE on success or FALSE on failure. In this case, the character
 * encoding for multi byte regex is NOT changed. If encoding is omitted, then the current character encoding name is
 * returned.
 */

var_dump(mb_internal_encoding());
var_dump(mb_internal_encoding('UTF-8'));