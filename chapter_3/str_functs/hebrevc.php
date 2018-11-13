<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:17
 *
 * Convert logical Hebrew text to visual text with newline conversion. This function is similar to hebrev() with the
 * difference that it converts newlines (\n) to "<br>\n". The function tries to avoid breaking words.
 * http://php.net/manual/en/function.hebrevc.php
 * @param string $hebrew_text a hebrew input string.
 * @param string $max_chars_per_line this optional parameter indicates maximum number of characters per line that will
 * be returned.
 * @return string the visual string.
 */

var_dump(hebrevc("ב חשון התשסג\nב חשון התשסג"));