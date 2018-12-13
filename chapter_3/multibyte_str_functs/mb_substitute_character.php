<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:52
 *
 * Set/Get substitution character.
 * http://php.net/manual/en/function.mb-substitute-character.php
 * Specifies a substitution character when input character encoding is invalid or character code does not exist in
 * output character encoding. Invalid characters may be substituted NULL (no output), string or integer value
 * (Unicode character code value).
 * This setting affects mb_convert_encoding(), mb_convert_variables(), mb_output_handler(), and mb_send_mail().
 * @param mixed $substchar specify the Unicode value as an integer, or as one of the following strings:
 * "none": no output
 * "long": Output character code value (Example: U+3000, JIS+7E7E)
 * "entity": Output character entity (Example: &#x200;)
 * @return mixed if substchar is set, it returns TRUE for success, otherwise returns FALSE. If substchar is not set,
 * it returns the current setting.
 */

/* Set with Unicode U+3013 (GETA MARK) */
var_dump(mb_substitute_character(0x3013));

/* Set hex format */
var_dump(mb_substitute_character('long'));

/* Display current setting */
var_dump(mb_substitute_character());