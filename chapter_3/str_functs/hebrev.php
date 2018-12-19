<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:17
 *
 * string hebrev ( string $hebrew_text [, int $max_chars_per_line = 0 ] )
 *
 * Converts logical Hebrew text to visual text. The function tries to avoid breaking words.
 * http://php.net/manual/en/function.hebrev.php
 * @param string $hebrew_text a hebrew input string.
 * @param string $max_chars_per_line this optional parameter indicates maximum number of characters per line that will
 * be returned.
 * @return string the visual string.
 */

var_dump(hebrev("ב חשון התשסג"));