<?php

/**
 * Created by PhpStorm.
 * User: fljurado
 * Date: 8/11/18
 * Time: 16:47
 *
 * Set/Get current language.
 * http://php.net/manual/en/function.mb-language.php
 * @param string $language used for encoding e-mail messages. Valid languages are "Japanese", "ja","English","en" and
 * "uni" (UTF-8). mb_send_mail() uses this setting to encode e-mail. Language and its setting is ISO-2022-JP/Base64
 * for Japanese, UTF-8/Base64 for uni, ISO-8859-1/quoted printable for English.
 * @return mixed If language is set and language is valid, it returns TRUE. Otherwise, it returns FALSE. When language
 * is omitted, it returns the language name as a string. If no language is set previously, it then returns FALSE.
 */

var_dump(mb_language());
var_dump(mb_language('neutral'));